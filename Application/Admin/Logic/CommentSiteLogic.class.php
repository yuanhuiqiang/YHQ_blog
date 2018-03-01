<?php
namespace Admin\Logic;
use Think\Model\RelationModel;
class CommentSiteLogic extends RelationModel {

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
	public function getSiteList(array $limit = [0, 20], array $search, array $order=[], array $field=[]){

		//limit处理
		$limit_str = '';
		if( !empty($limit) && $limit[1] != -1 && !empty($limit[0])){
			$limit_str = empty($limit[1]) ? ' LIMIT '.intval($limit[0]).' ' : ' LIMIT '.intval($limit[0]).','.intval($limit[1]).' ';
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
			$field_str = ' __COMMENT_SITE__.*';
		}

		return D('CommentSite',"Model")->query('SELECT '.$field_str.' FROM __COMMENT_SITE__  '.$where_str.$order_str.$limit_str);
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

		return D('Comment',"Model")->query('SELECT COUNT(`site_id`) as sn FROM __COMMENT_SITE__ '.$where_str)[0]['sn'];

	}
	/*根据搜索数组生成sql 的where条件字符串，主要用于getlist和getCount条件处理的一致性*/
	private function dealSearch($search){
		$where_str = '';
		foreach($search as $key => $value){
			$key = addslashes(trim($key));
			switch($key){
				case 'site_name':
					$where_str = $where_str.' __COMMENT_SITE__.'.$key.' like \'%'.addslashes(trim($value))."%' and ";
					break;
				case 'site_url':
					$where_str = $where_str.' __COMMENT_SITE__.'.$key.' like \'%'.addslashes(trim($value))."%' and ";
					break;
				case 'site_id':
					$where_str = $where_str.'  __COMMENT_SITE__.'.$key.' = '."'".addslashes(trim($value))."' and ";
					break;
				case 'user_id':
					$where_str = $where_str.' __COMMENT_SITE__.'.$key.' = '.intval($value)." and ";
					break;
			}
		}
		return $where_str;
	}

}
