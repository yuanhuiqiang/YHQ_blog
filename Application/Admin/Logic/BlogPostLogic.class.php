<?php
namespace Admin\Logic;

use Think\Model\RelationModel;

class BlogPostLogic extends RelationModel{

	/**
	 * 文章列表获取
	 *
	 * @param array $limit 一维数值型数组，第一位起始，第二为长度,有默认值，当强制置空时表示不限制数量
	 * @param array $search 一维数组，键为查询关键字，值为查询值（仅适用简单查询）
	 * @param array $order 一维数组，键为排序字段，值为顺逆序
	 * @param array $field
	 *
	 * @return mixed 二维数组，返回sql查询结果
	 */
	public function getPostList(array $limit = [0, 20], array $search, array $order, array $field=[]){

		//limit处理
		$limit_str = '';
		if( !empty($limit) && $limit[1] != -1){
			$limit_str = addslashes(empty($limit[1]) ? ' LIMIT '.$limit[0].' ' : ' LIMIT '.$limit[0].','.$limit[1].' ');
		}
		//where条件处理
		$where_str = '';
		foreach($search as $key => $value){
			$key = addslashes(trim($key));
			switch($key){
				case 'post_date':
					$post_date_arr = explode('至', $value);
					$where_str     = $where_str.' __BLOG_POST__.'.$key." >  \"".addslashes(trim($post_date_arr[0]))."\" and __BLOG_POST__.".$key." < \"".addslashes(trim($post_date_arr[1]))."\" and ";
					break;
				case 'post_title':
					$where_str = $where_str.' __BLOG_POST__.'.$key.' like \'%'.addslashes(trim($value))."%' and ";
					break;
				case 'cat_id':
					if($value == -1){
						break;
					}
					$where_str = $where_str.'  __BLOG_CAT_POST_RELATIONSHIP__.'.$key.' = '."'".intval($value)."' and ";
					break;
				case 'post_id':
					$where_post_id_arr = is_array($value)?$value:[$value];
					$post_id_where_in = implode(',',array_map(function($where_post_id){
						return "'".intval($where_post_id)."'";
					},$where_post_id_arr));

					$where_str = $where_str.' __BLOG_POST__.'.$key.' in ('.$post_id_where_in.") and ";
					break;
				case 'user_id':
					$where_str = $where_str.' __BLOG_POST__.'.$key.' = '.intval($value)." and ";
					break;
			}
		}
		if( !empty($where_str) && ($and_pos = strrpos($where_str, 'and')) !== false){
			$where_str = ' WHERE '.substr($where_str, 0, $and_pos);
		}
		//排序处理
		$order_str = '';
		foreach($order as $sort_val => $order_val){

			$order_str .= ' '.$sort_val.' '.$order_val.' , ';
		}
		if( !empty($order_str) && ($comma_pos = strrpos($order_str, ',')) !== false){
			$order_str = addslashes(' ORDER BY '.substr($order_str, 0, $comma_pos));
		}

		$field_str = '';
		if( !empty($field)){
			$field_str = addslashes(implode(',', $field));
		}else{
			$field_str = ' __BLOG_POST__.*,group_concat( distinct __BLOG_CAT_POST_RELATIONSHIP__.cat_id) AS cat_id ,
			group_concat( distinct __BLOG_CAT__.cat_name) as cat_name,
			group_concat( distinct __BLOG_TAG_POST_RELATIONSHIP__.tag_id) AS tag_id ,group_concat( distinct __BLOG_TAG__.tag_name) as tag_name
			';
		}

		// 感觉好搓的sql.....
		return D('BlogPost',"Model")->query('SELECT '.$field_str.' FROM __BLOG_POST__  '.
		                        'LEFT JOIN __BLOG_CAT_POST_RELATIONSHIP__  ON __BLOG_CAT_POST_RELATIONSHIP__.post_id=__BLOG_POST__.post_id '.
		                        'LEFT JOIN `__BLOG_CAT__`  ON __BLOG_CAT_POST_RELATIONSHIP__.cat_id=__BLOG_CAT__.cat_id '.
		                        'LEFT JOIN __BLOG_TAG_POST_RELATIONSHIP__  ON __BLOG_TAG_POST_RELATIONSHIP__.post_id=__BLOG_POST__.post_id '.
		                        'LEFT JOIN `__BLOG_TAG__`  ON __BLOG_TAG_POST_RELATIONSHIP__.tag_id=__BLOG_TAG__.tag_id '.
		                        $where_str.
		                        '  GROUP BY __BLOG_POST__.post_id  '.
		                        $order_str.$limit_str);
	}

	/** 根据筛选条件获取总记录数  **/
	public function getCount(array $search=[]){
		if(empty($search)){
			$where_str = '';
		}else{
			$where_str = '';
			foreach($search as $key => $value){
				$key = addslashes(trim($key));
				switch($key){
					case 'post_date':
						$post_date_arr = explode('至', $value);
						$where_str     = $where_str.' __BLOG_POST__.'.$key." >  \"".addslashes(trim($post_date_arr[0]))."\" and __BLOG_POST__.".$key." < \"".addslashes(trim($post_date_arr[1]))."\" and ";
						break;
					case 'post_title':
						$where_str = $where_str.' __BLOG_POST__.'.$key.' like \'%'.addslashes(trim($value))."%' and ";
						break;
					case 'cat_id':
						if($value == -1){
							break;
						}

						$where_str = $where_str.'  __BLOG_CAT_POST_RELATIONSHIP__.'.$key.' = '."'".intval($value)."' and ";
						break;
					case 'post_id':
						$where_post_id_arr = is_array($value)?$value:[$value];
						$post_id_where_in = implode(',',array_map(function($where_post_id){
							return "'".$where_post_id."'";
						},$where_post_id_arr));

						$where_str = $where_str.' __BLOG_POST__.'.$key.' in ('.$post_id_where_in.") and ";
						break;
					case 'user_id':
						$where_str = $where_str.' __BLOG_POST__.'.$key.' = '.intval($value)." and ";
						break;
				}
			}
			if( !empty($where_str) && ($and_pos = strrpos($where_str, 'and')) !== false){
				$where_str = ' WHERE '.substr($where_str, 0, $and_pos);
			}
		}

		return D('BlogPost',"Model")->query('SELECT COUNT(`post_id`) as cn FROM __BLOG_POST__ '.$where_str)[0]['cn'];

	}

	/** 通过id获取文章  **/
	public function getPostById($post_id,$user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}

		return D('Post')->where(array("post_id"=>intval($post_id),"user_id"=>$user_id))->find();
	}

	/** 添加文章  **/
	public function addPost($data,$user_id=''){
		if(empty($user_id)){
			$user_id = session("user_id");
		}
		$data['user_id'] = $user_id;

		//文章 更新文章
		$post_model = D('BlogPost',"Model");
		if( !$post_model->create($data)){

			return false;

		}else{

			$post_id = $post_model->add($data);

			//分类 删除关联关系 添加新关联关系
			$cat_model = D('blog_cat_post_relationship');
			foreach($data['cat_id'] as $cat_id){
				$cat_insert_res = $cat_model->data([
					'post_id' => $post_id,
					'cat_id'  => $cat_id
				])->add();
				if($cat_insert_res === false){
					return false;
				}
			}

			//标签 删除关联关系 添加新关联关系
			$tag_model = D('blog_tag_post_relationship');
			foreach($data['tag_id'] as $tag_id){
				$tag_insert_res = $tag_model->data([
					'post_id' => $post_id,
					'tag_id'  => $tag_id
				])->add();
				if($tag_insert_res === false){
					return false;
				}
			}

		}


		return $post_id;
	}

	/**
	 * 修改文章
	 * 数据格式为 文章字段对应字符串     分类和标签都是ID数组
	 */
	public function updatePost($data,$user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}

		//文章 更新文章
		$post_model = D('BlogPost',"Model");

		if( $post_model->create($data)){

			$res_post = $post_model->where(array("user_id"=>$user_id,"post_id"=>$data['post_id']))->save($data);
			if($res_post === false){
				return false;
			}
			//$res_post不为false则说明该post_id 属于 该user_id ，且在controller中一般会先执行checkID， 所以以下操作是安全的，无需带user_id， 关联表中也没有user_id

			//分类 删除关联关系 添加新关联关系
			$cat_model = D('blog_cat_post_relationship');
			$cat_model->where(['post_id' => $data['post_id']])->delete();
			foreach($data['cat_id'] as $cat_id){
				$cat_insert_res = $cat_model->data([
					'post_id' => $data['post_id'],
					'cat_id'  => $cat_id
				])->add();
				if($cat_insert_res === false){
					return false;
				}
			}

			//标签 删除关联关系 添加新关联关系
			$tag_model = D('blog_tag_post_relationship');
			$tag_model->where(['post_id' => $data['post_id']])->delete();
			foreach($data['tag_id'] as $tag_id){
				$tag_insert_res = $tag_model->data([
					'post_id' => $data['post_id'],
					'tag_id'  => $tag_id
				])->add();
				if($tag_insert_res === false){
					return false;
				}
			}

			$post_save_res = true;

		}else{
			$this->ajaxReturn($post_model->getError());
			// 保存更新
			$post_save_res = false;


		}

		return $post_save_res;

	}

	/** 批量修改文章属性  **/
	public function updateMultiPostAttr($data,$user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}

		$post_id_arr = $data['post_id'];

		if(is_array($post_id_arr) && !empty($post_id_arr)){
			foreach($post_id_arr as $post_id){
				$data['post_id'] = $post_id;
				$res             = $this->updatePost($data,$user_id);
				if($res === false){
					return false;
				}
			}
		}else{
			return false;
		}

		return true;
	}

	/**
	 *  删除单篇文章
	 * @param $post_id 指定post_id
	 * @param $user_id  默认取session中的user_id
	 *
	 * @return mixed
	 */
	public function delPostById($post_id,$user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}
		return D('BlogPost')->where(array(
			"user_id"=>$user_id
		))->delete(intval($post_id));

	}

	/**
	 * 删除多篇文章
	 * @param array $post_id_arr   post_id 数组
	 * @param $user_id  默认取session中的user_id
	 *
	 * @return mixed
	 */
	public function delMultPostById($post_id_arr = [],$user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}

		//过滤
		$arr   = array_filter($post_id_arr, function($post_id){
			return is_numeric($post_id) ? true : false;
		});
		$post_id_str = implode(',', $arr);

		return D('BlogPost')->where(array(
			"user_id"=>$user_id
		))->delete($post_id_str); // delete支持删除'1,2,5'
	}

	/**
	 * 检查post_id 在该用户中是否存在
	 * @param $ids 数值型数组或者数字
	 * @param $user_id
	 *
	 * @return bool
	 */
	public function checkID($ids,$user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}

		if(is_numeric($ids)){
			$ids = [$ids];
		}

		if( !empty($ids) && is_array($ids)){
			foreach($ids as $id){       // 此处可以用 where in  改进
				$res = $this->where(array("user_id"=>$user_id))->find($id);
				if($res == false || $res == null){ //此处不能用count判断，因为count(false) 为 1
					return false;
				}
			}
		}else{
			return false;
		}

		return true;

	}

}
