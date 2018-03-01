<?php
namespace Admin\Logic;
use Think\Model\RelationModel;
class CommentLogic extends RelationModel {

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
	public function getCommentList(array $limit = [0, 20], array $search, array $order, array $field=[]){
		//limit处理
		$limit_str = '';
		if( !empty($limit) && $limit[1] != -1){
			$limit_str = addslashes(empty($limit[1]) ? ' LIMIT '.$limit[0].' ' : ' LIMIT '.$limit[0].','.$limit[1].' ');
		}
		//where条件处理
		$where_str = $this->dealSearch($search);

		if( !empty($where_str) && ($and_pos = strrpos($where_str, 'and')) !== false){ //去除where最后一个多余的and
			$where_str = ' WHERE '.substr($where_str, 0, $and_pos);
		}
		//排序处理
		$order_str = '';
		foreach($order as $sort_val => $order_val){

			$order_str .= ' '.$sort_val.' '.$order_val.' , ';
		}
		if( !empty($order_str) && ($comma_pos = strrpos($order_str, ',')) !== false){//去除$order_str最后一个多余的逗号
			$order_str = addslashes(' ORDER BY '.substr($order_str, 0, $comma_pos));
		}

		$field_str = '';
		if( !empty($field)){
			$field_str = addslashes(implode(',', $field));
		}else{
			$field_str = ' __COMMENT__.*,__COMMENT_POST__.cp_source_id,__COMMENT_POST__.cp_id,__COMMENT_POST__.cp_title,
			__COMMENT_SITE__.site_name,__COMMENT_SITE__.site_id ,c_comment.comment_count';
		}


		// 感觉好搓的sql.....
		return D('Comment',"Model")->query('SELECT '.$field_str.' FROM __COMMENT__  '.
											'LEFT JOIN (SELECT COUNT(comment_target_id) AS comment_count,comment_target_id from __COMMENT__  GROUP BY comment_target_id ) AS c_comment '.
		                                   ' ON c_comment.comment_target_id=yhq_comment.comment_target_id '.
		                                   ' LEFT JOIN __COMMENT_POST__ ON __COMMENT_POST__.cp_id=__COMMENT__.comment_target_id '.
		                                   ' LEFT JOIN __COMMENT_SITE__ ON __COMMENT_SITE__.site_id = __COMMENT_POST__.site_id '.
		                                   $where_str.$order_str.$limit_str);
	}

	/** 根据筛选条件获取总记录数  **/
	public function getCount(array $search=[]){
		if(empty($search)){
			$where_str = '';
		}else{
			$where_str = $this->dealSearch($search);
			if( !empty($where_str) && ($and_pos = strrpos($where_str, 'and')) !== false){
				$where_str = ' WHERE '.substr($where_str, 0, $and_pos);
			}
		}

		return D('Comment',"Model")->query('SELECT COUNT(`comment_id`) as cn FROM __COMMENT__ '.$where_str)[0]['cn'];

	}
	/*根据搜索数组生成sql 的where条件字符串，主要用于getlist和getCount条件处理的一致性*/
	private function dealSearch($search){
		$where_str = '';
		foreach($search as $key => $value){
			$key = addslashes(trim($key));
			switch($key){
				case 'comment_date':
					$date_arr = explode('至', $value);
					$where_str     = $where_str.' __COMMENT__.'.$key." >  \"".addslashes(trim($date_arr[0]))."\" and __COMMENT__.".$key." < \"".addslashes(trim($date_arr[1]))."\" and ";
					break;
				case 'comment_author_name':
					$where_str = $where_str.' __COMMENT__.'.$key.' like \'%'.addslashes(trim($value))."%' and ";
					break;
				case 'comment_content':
					$where_str = $where_str.' __COMMENT__.'.$key.' like \'%'.addslashes(trim($value))."%' and ";
					break;
				case 'site_id':

					$where_str = $where_str.'  __COMMENT_SITE__.'.$key.' = '."'".intval($value)."' and ";
					break;
				case 'comment_target_id':

					$where_str = $where_str.'  __COMMENT__.'.$key.' like \'%'.addslashes(trim($value))."%' and ";
					break;
				case 'comment_status':
					if(addslashes(trim($value))==-1){
						break;
					}
					if(addslashes(trim($value))==0){ //显示审核和未审核的
						$where_str = $where_str.'  __COMMENT__.'.$key.' IN (1,2) and ';
						break;
					}
					$where_str = $where_str.'  __COMMENT__.'.$key.' = '."'".intval($value)."' and ";
					break;
				case 'comment_id':

					$where_str = $where_str.'  __COMMENT__.'.$key.' = '."'".intval($value)."' and ";
					break;
				case 'user_id':
					$where_str = $where_str.' __COMMENT__.'.$key.' = '.intval($value)." and ";
					break;
			}
		}
		return $where_str;
	}

}
