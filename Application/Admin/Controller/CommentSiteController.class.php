<?php
namespace Admin\Controller;

use Think\Controller;

class CommentSiteController extends Controller{

	public function index(){
		$this->display();
	}

	public function getList(){
		$draw = empty($_GET['draw']) ? I('post.draw', '', 'htmlspecialchars') : I('get.draw', '', 'htmlspecialchars');

		$limit_arg  = [$_POST['start'], $_POST['length']];
		$search_arg = [];
		$order_arg  = [];
		foreach($_POST['columns'] as $column){
			if($column['searchable'] == true && trim($column['search']['value']) != ''){
				$search_arg[ $column['name'] ] = $column['search']['value'];
			}
		}
		foreach($_POST['order'] as $order){
			$order_arg[ $_POST['columns'][ $order['column'] ]['name'] ] = $order['dir'];

		}
		$model_post            = D("CommentSite", 'Logic');
		$search_arg['user_id'] = session("user_id");// 只能访问自己的评论

		$data = $model_post->getSiteList($limit_arg, $search_arg, $order_arg);

		$this->ajaxReturn(array(
			"draw"            => $draw,
			"recordsTotal"    => $model_post->getCount(array("user_id" => $search_arg['user_id'])),  // necessary
			"recordsFiltered" => $model_post->getCount($search_arg), // necessary
			"data"            => $data// necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}

	public function getItemById(){
		$site_id = I("post.site_id");

		if( !empty($site_id)){

			$res = D("CommentSite")->where(array(
				"user_id" => session("user_id"),
				"site_id" => $site_id
			))->find();

			array_walk_recursive($res, function(&$item){
				$item = htmlspecialchars_decode($item);//因为是放在input框中，所以要html转义
			});
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

	public function update(){

		$data = I("post.","","htmlspecialchars");

		$data['user_id'] = session("user_id");

		$site_model = D("CommentSite", "Model");
		if( !$site_model->create($data)){
			$this->ajaxReturn(array(
				"status" => 0,
				"msg"    => implode("\n", array_values($site_model->getError())),  // necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}else{

			$where['site_id'] = ':site_id';
			$where['user_id'] = ':user_id';
			$site_add_res     = $site_model->fetchSql(false)->where($where)->bind([
				':site_id'   => $data['site_id'],
				':user_id'   => $data['user_id'],
				':site_url'  => $data['site_url'],
				':site_name' => $data['site_name'],
			])->save([
				'site_url'  => ':site_url',
				'site_name' => ':site_name',
			]);
			if($site_add_res){
				$this->ajaxReturn(array(
					"status" => 1,
					"msg"    => '更新成功',
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}else{
				$this->ajaxReturn(array(
					"status" => 0,
					"msg"    => '未更新',
				), 'JSON', JSON_UNESCAPED_UNICODE);
			}

		}


	}

	public function del(){
		$site_id = I("post.site_id");
		if( !empty($site_id)){
			$res = D("CommentSite")->where(array(
				'site_id' => $site_id,
				"user_id" => session("user_id")
			))->delete(); //delete 直接传参无法删除id为0的记录，必须用where
			if($res !== false){
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

	public function add(){

		$site_model = D("CommentSite", "Model");

		//数据处理
		$data = I("post.");
		$data['user_id'] = session('user_id');
		$data['site_appid'] = $site_model->generateAppid();
		if(isset($data['site_id'])) unset($data['site_id']);

		if( !$site_model->create($data)){
			$this->ajaxReturn(array(
				"status" => 0,
				"msg"    => $site_model->getError(),  // necessary
			), 'JSON', JSON_UNESCAPED_UNICODE);
		}else{

			$site_add_res = $site_model->add($data);
			if($site_add_res){
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

	//ajax获取所有站点
	public function getAll(){
		$user_id = session("user_id");

		$data    = D('CommentSite', 'Logic')->getSiteList([],['user_id'=>$user_id],[],['site_id','site_name']);

		$this->ajaxReturn(array(
			"status"    => 1,  // necessary
			"data"            => $data// necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}
}

