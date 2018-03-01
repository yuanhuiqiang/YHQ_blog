<?php
namespace Admin\Logic;
use Think\Model\RelationModel;
class BlogTagLogic extends RelationModel {
	/**
	 * @param $name_arr array 标签名称数组
	 * @param $user_id int  用户ID
	 * @param $type int 指定返回数组 0 表示返回新添加的id数组   1 表示返回已存在标签的id数组 2 表示返回新添加和已存在的合并数组  3 返回新添加和已存在的组合数组
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
				$find_res = $this->field('tag_id')->where(['tag_name'=>$name,'user_id'=>$user_id])->find();

				if($find_res==false ||$find_res==null  ){
					$insert_res = $this->data(['tag_name'=>$name,'user_id'=>$user_id])->add();
					if($insert_res==false ||$insert_res==null){
						return false;
					}else{
						array_push($insert_ids,$insert_res);
					}
				}else{
					array_push($exist_ids,$find_res['tag_id']);
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

	public function checkID($ids,$user_id){
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

	public function getTagList($user_id){
		if(empty($user_id)){
			$user_id = session("user_id");
		}
		//		$Model->join('__WORK__ ON __artist__.id = __WORK__.artist_id','RIGHT')->select();
		return D("BlogTag")->fetchSql(false)->where(['user_id'=>$user_id])->select();
	}

	public function delData(){

	}

	public function saveData(){

	}


}
