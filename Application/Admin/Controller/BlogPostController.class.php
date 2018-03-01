<?php
namespace Admin\Controller;

use Think\Exception;

class BlogPostController extends BaseController{
	//列表展示页面
	public function index(){

		$this->display();

	}
	//列表数据
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
			$order_arg[ $_POST['columns'][ $order['column']['name'] ]['name'] ] = $order['dir'];
		}
		$model_post = D("BlogPost", 'Logic');
		$search_arg['user_id'] = session("user_id");// 只能访问自己的文章
		$data = $model_post->getPostList($limit_arg, $search_arg, $order_arg);

		$this->ajaxReturn(array(
			"draw"            => $draw,
			"recordsTotal"    => $model_post->getCount(array("user_id"=>$search_arg['user_id'])),  // necessary
			"recordsFiltered" => $model_post->getCount($search_arg), // necessary
			"data"            => $data// necessary
		), 'JSON', JSON_UNESCAPED_UNICODE);
	}
	//添加页面显示
	public function create(){
		$this->display("edit");

	}
	//添加动作
	public function store(){


		$post_data = I("post.");//获取全部post数据，默认过滤

		if(!empty($post_data['cat_id'])){
			if(is_numeric($post_data['cat_id'])){
				$post_data['cat_id'] = [$post_data['cat_id']];
			}
		}else{
			unset($post_data['cat_id']);
		}
		if(!empty($post_data['tag_id'])){
			if(is_numeric($post_data['tag_id'])){
				$post_data['tag_id'] = [$post_data['tag_id']];
			}
		}else{
			unset($post_data['tag_id']);
		}


		$post_data['user_id'] = session('user_id');// 只能更新自己的文章
		//实例化将要操作的模型类
		$cat_logic = D("BlogCat", 'Logic');
		$tag_logic = D("BlogTag", 'Logic');
		$post_logic = D("BlogPost", 'Logic');

		//检查分类id是否有效
		$res_check_cat =  isset($post_data['cat_id'])?$cat_logic->checkID($post_data['cat_id'],$post_data['user_id']):true;
		$res_check_tag = isset($post_data['tag_id'])?$tag_logic->checkID($post_data['tag_id'],$post_data['user_id']):true;

		if($res_check_cat && $res_check_tag){
			//添加不存在的相应name的分类和标签
			$res_add_cat = isset($post_data['cat_name'])?$cat_logic->addMultiData($post_data['cat_name'],$post_data['user_id'],2):[];
			unset($post_data['cat_name']);
			$res_add_tag = isset($post_data['tag_name'])?$tag_logic->addMultiData($post_data['tag_name'],$post_data['user_id'],2):[];
			unset($post_data['tag_name']);
			//将新添加的分类和tag添加到文章更新数据中
			if($res_add_cat!==false && !empty($res_add_cat)){
				$post_data['cat_id'] = is_array($post_data['cat_id'])?array_merge($post_data['cat_id'],$res_add_cat):$res_add_cat;
			}
			if($res_add_tag!==false && !empty($res_add_tag)){
				$post_data['tag_id'] = is_array($post_data['tag_id'])?array_merge($post_data['tag_id'],$res_add_tag):$res_add_tag;
			}
			//由于使用的框架自带方法add添加，底层使用的是预编译sql，故可以直接存储，无需处理
			$post_data['post_content'] = $_POST['post_content'];
			//提交文章数据，$post_data['user_id'] 是由 session('user_id') 指定
			$res_add_post= $post_logic->addPost($post_data);

			$response = ($res_add_cat!==false && $res_add_tag!==false && $res_add_post!==false)?
				array("msg"=> '添加成功',"status"=> 1,"data"=>$res_add_post):
				array("msg"=> '数据有误',"status"=> 0);

		}else{

			$response = array("msg"=> '数据有误',"status"=> 0);

		}
		$this->ajaxReturn($response, 'JSON', JSON_UNESCAPED_UNICODE);


	}
	//删除动作
	public function del(){
		$post_id_arr = I("post.post_id");

		$json_arr = array(
			"msg"    => '操作失败',
			"status" => '0',  // necessary
		);
		if((is_array($post_id_arr) || is_numeric($post_id_arr)) && !empty($post_id_arr)){
			if(is_numeric($post_id_arr)){
				$post_id_arr = [$post_id_arr];
			}
			//该函数接受数值型数组
			$res = D("BlogPost", 'Logic')->delMultPostById($post_id_arr,session("user_id"));
			if(is_numeric($res)){
				$json_arr = array(
					"msg"    => '成功删除'.$res.'条记录',
					"status" => '1',  // necessary
					"data"   => $res// necessary
				);
			}

		}

		$this->ajaxReturn($json_arr, 'JSON', JSON_UNESCAPED_UNICODE);
	}
	//显示编辑页面
	public function edit(){

		$this->display();

	}
	//更新动作
	public function update(){

		$post_data = I("post.");//获取全部post数据，默认过滤

		
		$post_data['post_content'] = $_POST['post_content'];

		if(!empty($post_data['post_id'])){
			if( is_numeric($post_data['post_id']))
				$post_data['post_id'] = [$post_data['post_id']];
		}
		if(!empty($post_data['cat_id'])){
			if( is_numeric($post_data['cat_id']))
				$post_data['cat_id'] = [$post_data['cat_id']];
		}else{
			unset($post_data['cat_id']);
		}
		if(!empty($post_data['tag_id'])){
			if( is_numeric($post_data['tag_id']))
				$post_data['tag_id'] = [$post_data['tag_id']];
		}else{
			unset($post_data['tag_id']);
		}


		$post_data['user_id'] = session("user_id");
		//实例化将要操作的模型类
		$cat_logic = D("BlogCat", 'Logic');
		$tag_logic = D("BlogTag", 'Logic');
		$post_logic = D("BlogPost", 'Logic');

		//检查分类id是否有效
		$res_check_cat =  isset($post_data['cat_id'])?$cat_logic->checkID($post_data['cat_id'],$post_data['user_id']):true;
		$res_check_tag = isset($post_data['tag_id'])?$tag_logic->checkID($post_data['tag_id'],$post_data['user_id']):true;
		$res_check_post =  isset($post_data['post_id'])?$post_logic->checkID($post_data['post_id'],$post_data['user_id']):false;

		if($res_check_cat && $res_check_tag && $res_check_post){
			//去除空分类和标签名
			$post_data['cat_name'] = array_filter($post_data['cat_name'],function($value){
				return empty($value)?false:true;
			});
			$post_data['tag_name'] = array_filter($post_data['tag_name'],function($value){
				return empty($value)?false:true;
			});
			$trans_result = true;
			$trans = M();
			$trans->startTrans();
			try{
				//添加不存在的相应name的分类和标签
				$res_add_cat = isset($post_data['cat_name']) && !empty($post_data['cat_name'])?$cat_logic->addMultiData($post_data['cat_name'],$post_data['user_id'],2):[];
				unset($post_data['cat_name']);
				$res_add_tag = isset($post_data['tag_name']) && !empty($post_data['tag_name'])?$tag_logic->addMultiData($post_data['tag_name'],$post_data['user_id'],2):[];
				unset($post_data['tag_name']);
				//将新添加的分类和tag添加到文章更新数据中
				if($res_add_cat!==false && !empty($res_add_cat)){
					$post_data['cat_id'] = is_array($post_data['cat_id'])?array_merge($post_data['cat_id'],$res_add_cat):$res_add_cat;
				}
				if($res_add_tag!==false && !empty($res_add_tag)){
					$post_data['tag_id'] = is_array($post_data['tag_id'])?array_merge($post_data['tag_id'],$res_add_tag):$res_add_tag;
				}

				//提交文章数据
				$res_add_post= $post_logic->updateMultiPostAttr($post_data,$post_data['user_id']);

				$trans_result = ($res_add_cat!==false && $res_add_tag!==false && $res_add_post!==false)?true:false;

			}catch(Exception $e){
				$trans_result = false;
				Log::record($e->getMessage(), 'DEBUG');
			}

			if ($trans_result === false) {
				$trans->rollback();
				$response = array("msg"=> '数据有误',"status"=> 0);
			} else {
				$trans->commit();
				$response = array("msg"=> '更新成功',"status"=> 1);
			}

		}else{

			$response = array("msg"=> '数据有误',"status"=> 0);

		}
		$this->ajaxReturn($response, 'JSON', JSON_UNESCAPED_UNICODE);

	}
	//根据ID获取
	public function getItemById(){

		$post_id = I("post.post_id");



		if(empty($post_id)){
			$this->ajaxReturn(array(
					"msg"    => '文章有误',
					"status" => '0',  // necessary
				), 'JSON', JSON_UNESCAPED_UNICODE);
		}

		$json_arr = array(
			"msg"    => '获取文章信息失败',
			"status" => '0',  // necessary
		);

		$res = D("BlogPost", 'Logic')->getPostList([0,1],['post_id'=>I("post.post_id"),"user_id"=>session("user_id")],[],[])[0];


		if(!empty($res)){
			$json_arr = array(
				"msg"    => '获取文章信息成功',
				"status" => '1',  // necessary
				"data"  => $res
			);
		}

		$this->ajaxReturn($json_arr, 'JSON', JSON_UNESCAPED_UNICODE);
	}
}