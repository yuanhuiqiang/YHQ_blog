<?php
namespace Admin\Logic;
use Think\Model\RelationModel;
class BlogCatLogic extends RelationModel {

	public function checkID($ids,$user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}

		if(is_numeric($ids)){
			$ids = [$ids];

		}

		if(!empty($ids) && is_array($ids)){
			foreach($ids as $id){       // 此处可以用 where in  改进
				$res = $this->where(array("user_id"=>$user_id))->find($id);
				if($res==false ||$res==null  ){ //此处不能用count判断，因为count(false) 为 1
					return false;
				}
			}
		}else{
			return false;
		}

		return true;

	}

	/**
	 * @param $name_arr array 分类名称数组
	 * @param $user_id int  用户ID
	 * @param $type int 指定返回数组 0 表示返回新添加的id数组   1 表示返回已存在分类的id数组 2 表示返回新添加和已存在的合并数组  3 返回新添加和已存在的组合数组
	 * @return mixed 根据type类型返回对应的ID数组
	 */
	public function addMultiData($name_arr,$user_id,$type=0){
		if(empty($user_id)){
			$user_id = session("user_id");
		}

		$exist_ids = [];
		$insert_ids = [];
		if(!empty($name_arr) && is_array($name_arr)){
			foreach($name_arr as $name){
				$find_res = $this->field('cat_id')->where(['cat_name'=>$name,'user_id'=>$user_id])->find();
				if($find_res==false ||$find_res==null  ){
					$insert_res = $this->data(['cat_name'=>$name,'user_id'=>$user_id])->add();
					if($insert_res==false ||$insert_res==null){
						return false;
					}else{
						array_push($insert_ids,$insert_res);
					}
				}else{
					array_push($exist_ids,$find_res['cat_id']);
					continue;
				}
			}
		}
		switch($type){
			case 0:
				return $insert_ids;
				break;
			case 1:
				return $exist_ids;
				break;
			case 2:
				return array_merge($insert_ids,$exist_ids);
				break;
			case 3:
				return [$insert_ids,$exist_ids];
				break;
		}
	}

	public function getCatList($user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}
//		$Model->join('__WORK__ ON __artist__.id = __WORK__.artist_id','RIGHT')->select();
		return D("BlogCat")->field("c.*,IFNULL(cp.cat_name,'无') as cat_parent_name")->fetchSql(false)->alias("c")
			->join('__BLOG_CAT__ AS cp ON c.cat_parent_id = cp.cat_id','LEFT')->where(['c.user_id'=>$user_id])->select();
	}

	public function addCat(){

	}

	public function updateCat(){

	}

	public function delCatById(){

	}

}
