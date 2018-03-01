<?php
/**
 * Created by PhpStorm.
 * User: Loven
 * Date: 2018-01-30
 * Time: 13:21
 */
namespace Blog\Logic;

use Think\Model;

class BlogPostLogic extends Model{

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
	public function getPostList(array $limit = [0, 20], array $search, array $order){

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
					if($value == -1 || $value==''){
						break;
					}
					$where_str = $where_str.'  __BLOG_CAT_POST_RELATIONSHIP__.'.$key.' = '."'".intval($value)."' and ";
					break;
				case 'tag_id':
					if($value == -1 || $value==''){
						break;
					}
					$where_str = $where_str.'  __BLOG_TAG_POST_RELATIONSHIP__.'.$key.' = '."'".intval($value)."' and ";
					break;
				case 'post_id':
					$where_post_id_arr = is_array($value)?$value:[$value];
					$post_id_where_in = implode(',',array_map(function($where_post_id){
						return "'".$where_post_id."'";
					},$where_post_id_arr));

					$where_str = $where_str.' __BLOG_POST__.'.$key.' in ('.$post_id_where_in.") and ";
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
		return D('Post')->query('SELECT '.$field_str.' FROM __BLOG_POST__  '.
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
						if($value == -1 || $value == ''){
							break;
						}
						$where_str = $where_str.'  __BLOG_CAT_POST_RELATIONSHIP__.'.$key.' = '."'".intval($value)."' and ";
						break;
					case 'tag_id':
						if($value == -1 || $value == ''){
							break;
						}
						$where_str = $where_str.'  __BLOG_TAG_POST_RELATIONSHIP__.'.$key.' = '."'".intval($value)."' and ";
						break;
				}
			}
			if( !empty($where_str) && ($and_pos = strrpos($where_str, 'and')) !== false){
				$where_str = ' WHERE '.substr($where_str, 0, $and_pos);
			}
		}
		return D('Post')->query('SELECT COUNT(distinct __BLOG_POST__.post_id) as cn FROM __BLOG_POST__ '.
		                        'LEFT JOIN __BLOG_CAT_POST_RELATIONSHIP__  ON __BLOG_CAT_POST_RELATIONSHIP__.post_id=__BLOG_POST__.post_id '.
		                        'LEFT JOIN __BLOG_TAG_POST_RELATIONSHIP__  ON __BLOG_TAG_POST_RELATIONSHIP__.post_id=__BLOG_POST__.post_id '.
		                        $where_str)[0]['cn'];

	}

	public function getPostListByCatName($cat_name){
		$cat = M('blog_cat')->where(array('cat_name'=>$cat_name))->find();
		$article_id_list = M('blog_cat_post_relationship')->where(array('cat_id'=>$cat->cat_id))->select();
		$article_id_list_str = array_reduce($article_id_list,function($id,$row){
			return empty($id)?$row->post_id:$id.','.$row->post_id;
		});
		$article_list = M('blog_post')->where(array('cat_id'=>array('in',$article_id_list_str)))->order('post_order desc')->select();


	}

	public function getPostById($id){
		$post = D("BlogPost")->where(array("post_id"=>intval($id)))->find();
		$post['author_name'] = D("user")->find($post['user_id'])['user_nickname'];
		return $post;
	}

}