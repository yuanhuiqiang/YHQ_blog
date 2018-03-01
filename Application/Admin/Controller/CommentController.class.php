<?php
namespace Admin\Controller;

use Think\Controller;

class CommentController extends Controller{

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
		$model_post = D("Comment", 'Logic');
		$search_arg['user_id'] = session("user_id");// 只能访问自己的评论

		$data = $model_post->getCommentList($limit_arg, $search_arg, $order_arg);

		$this->ajaxReturn(array(
			"draw"            => $draw,
			"recordsTotal"    => $model_post->getCount(array("user_id"=>$search_arg['user_id'])),  // necessary
			"recordsFiltered" => $model_post->getCount($search_arg), // necessary
			"data"            => $data// necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}

	public function changeStatus(){
		$status = I('post.status');
		$comment_id_list = I('post.comment_id');
		array_walk($comment_id_list,function(&$comment_id){
			$comment_id = intval($comment_id);
		});
		$comment_id_list_str = implode(',',$comment_id_list);
		switch($status){
			case 'approve':
				$this->ajaxReturn(['msg'=>'approve']);
				break;
			case 'unapprove':
				$this->ajaxReturn(['msg'=>'unapprove']);
				break;
			case 'markAsSpam':
				$this->ajaxReturn(['msg'=>'markAsSpam']);
				break;
			case 'moveToTrash':
				$this->ajaxReturn(['msg'=>'moveToTrash']);
				break;
			case 'notSpam':
				$this->ajaxReturn(['msg'=>'notSpam']);
				break;
			case 'restore':
				$this->ajaxReturn(['msg'=>'restore']);
				break;
			case 'delete':
				$this->ajaxReturn(['msg'=>'delete']);
				break;
		}
	}
}

