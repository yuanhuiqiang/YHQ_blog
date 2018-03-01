<?php
namespace Admin\Controller;

use Think\Controller;

class BlogCategoryController extends Controller{

	public function index(){
		$this->display();
	}

	public function getList(){

		$draw = empty($_GET['draw']) ? I('post.draw', '', 'htmlspecialchars') : I('get.draw', '', 'htmlspecialchars');

		$user_id = session("user_id");
		$data    = D("BlogCat", 'Logic')->getCatList($user_id);

		$this->ajaxReturn(array(
			"draw"            => $draw,
			"recordsTotal"    => count($data),  // necessary
			"recordsFiltered" => count($data), // necessary
			"data"            => $data// necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}

	public function add(){
		$data = I("post.");
		//		$data['user_id'] = session("user_id");
		$data['user_id'] = session("user_id");

		$cat_model = D("BlogCat","Model");

		if( !$cat_model->create($data)){
			$this->ajaxReturn(array(
				"status" => 0,
				"msg"    => implode('<br/>',array_values($cat_model->getError())),  // necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}else{
			$cat_add_res = $cat_model->add($data);
			if($cat_add_res){
				$cat_add_data = $cat_model->find($cat_add_res);
				$this->ajaxReturn(array(
					"status" => 1,
					"msg"    => '添加成功',
					"data"  => $cat_add_data,
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}else{
				$this->ajaxReturn(array(
					"status" => 0,
					"msg"    => '添加失败',
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}

		}

	}

	public function del(){
		$cat_id = I("post.cat_id");
		if(is_numeric($cat_id)){
			$res = D("BlogCat")->where(["user_id"=>session("user_id"),'cat_id'=>$cat_id])->delete(); //delete 直接传参无法删除id为0的记录，必须用where
			if($res!==false){
				$this->ajaxReturn(array(
					"status" => 1,
					"msg"    => "删除成功",  // necessary
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}

		}
		$this->ajaxReturn(array(
			"status" => 0,
			"msg"    => "删除失败",  // necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}

	public function update(){
		$data = I("post.");
		//		$data['user_id'] = session("user_id");
		$data['user_id'] = session("user_id");

		$cat_model = D("BlogCat","Model");

		if( !$cat_model->create($data)){
			$this->ajaxReturn(array(
				"status" => 0,
				"msg"    => implode("\n",array_values( $cat_model->getError()) ),  // necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}else{
			$cat_add_res = $cat_model->where(array("user_id"=>$data['user_id'],"cat_id"=>$data['cat_id']))->save($data);
			if($cat_add_res){
				$this->ajaxReturn(array(
					"status" => 1,
					"msg"    => '添加成功',
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}else{
				$this->ajaxReturn(array(
					"status" => 0,
					"msg"    => '添加失败',
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}

		}
	}

	public function getItemById(){

		$cat_id = I("post.cat_id");
		if(is_numeric($cat_id)){
			$res = D("BlogCat")->where(array("user_id"=>session("user_id"),"cat_id"=>$cat_id))->find($cat_id);
			if( !empty($res)){
				$this->ajaxReturn(array(
					"status" => 1,
					"msg"    => "获取信息成功",  // necessary
					"data"   => $res
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}

		}
		$this->ajaxReturn(array(
			"status" => 0,
			"msg"    => "获取信息失败",  // necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}

	public function getAll(){
		//		$user_id = session("user_id");
		$user_id = session("user_id");
		$data    = D("BlogCat", 'Logic')->getCatList($user_id);

		if($data===false){
			$this->ajaxReturn(array(
				"status"    => 0,  // necessary
				"data"            => $data// necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}else{
			$this->ajaxReturn(array(
				"status"    => 1,  // necessary
				"data"            => $data// necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}


	}


}

