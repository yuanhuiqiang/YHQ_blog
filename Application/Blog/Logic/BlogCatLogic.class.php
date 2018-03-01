<?php
namespace Blog\Logic;
use Think\Model\RelationModel;
class BlogCatLogic extends RelationModel {

	public function getCatList($user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}
//		$Model->join('__WORK__ ON __artist__.id = __WORK__.artist_id','RIGHT')->select();
		return D("BlogCat")->field("c.*,IFNULL(cp.cat_name,'无') as cat_parent_name")->fetchSql(false)->alias("c")
			->join('__BLOG_CAT__ AS cp ON c.cat_parent_id = cp.cat_id','LEFT')->where(['c.user_id'=>$user_id])->select();
	}
	public function getCatByPostId($post_id){
		D("BlogCat")->where()->find();
	}


}
