<?php
namespace Blog\Logic;
use Think\Model\RelationModel;
class BlogTagLogic extends RelationModel {


	public function getTagList($user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}
		//		$Model->join('__WORK__ ON __artist__.id = __WORK__.artist_id','RIGHT')->select();
		return D("BlogTag")->fetchSql(false)->where(['user_id'=>$user_id])->select();
	}


}
