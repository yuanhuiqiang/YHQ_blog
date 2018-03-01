<?php
namespace Admin\Controller;

use Think\Controller;

class BlogTagController extends Controller{
	//页面显示
	public function index(){
		$this->display();
	}
	//ajax插件列表数据
	public function getList(){

		$draw = empty($_GET['draw']) ? I('post.draw', '', 'htmlspecialchars') : I('get.draw', '', 'htmlspecialchars');
		//		$user_id = session("user_id");
		$user_id = 1;
		$data    = D('BlogTag', 'Logic')->getTagList($user_id);

		$this->ajaxReturn(array(
			"draw"            => $draw,
			"recordsTotal"    => count($data),  // necessary
			"recordsFiltered" => count($data), // necessary
			"data"            => $data// necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}
	//ajax添加标签
	public function add(){
		$data = I("post.");
		//		$data['user_id'] = session("user_id");
		$data['user_id'] = session('user_id');

		$tag_model = D("BlogTag","Model");

		if( !$tag_model->create($data)){
			$this->ajaxReturn(array(
				"status" => 0,
				"msg"    => $tag_model->getError(),  // necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}else{
			$tag_add_res = $tag_model->add($data);
			if($tag_add_res){
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
	//ajax删除标签
	public function del(){
		$tag_id = I("post.tag_id");
		if(is_numeric($tag_id)){
			$res = D("BlogTag")->where(array('tag_id'=>$tag_id,"user_id"=>session("user_id")))->delete(); //delete 直接传参无法删除id为0的记录，必须用where
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
	//ajax更新标签
	public function update(){
		$data = I("post.");
		//		$data['user_id'] = session("user_id");
		$data['user_id'] = session("user_id");

		$tag_model = D("BlogTag","Model");

		if( !$tag_model->create($data)){
			$this->ajaxReturn(array(
				"status" => 0,
				"msg"    => implode("\n",array_values( $tag_model->getError()) ),  // necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}else{
			$tag_add_res = $tag_model->where(array("tag_id"=>$data['tag_id'],"user_id"=>$data['user_id']))->save($data);
			if($tag_add_res){
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
	//ajax根据标签ID获取单个标签
	public function getItemById(){
		$tag_id = I("post.tag_id");
		if(is_numeric($tag_id)){
			$res = D("BlogTag")->where(array("user_id"=>session("user_id")))->find($tag_id);
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
	//ajax获取所有标签
	public function getAll(){
		//		$user_id = session("user_id");
		$user_id = session("user_id");
		$data    = D('BlogTag', 'Logic')->getTagList($user_id);

		$this->ajaxReturn(array(
			"status"    => 1,  // necessary
			"data"            => $data// necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}
}