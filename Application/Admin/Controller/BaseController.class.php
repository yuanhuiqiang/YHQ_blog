<?php
namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller{

	public function _initialize() {
		session("user_id",1);
	}

	public function index(){
		$tag = D('BlogTag', 'Model'); //实例化UserLogic
		$re  = $tag->create([
			'tag_id'          => 2,
			'user_id'         => 1,
			'tag_name'        => '前端',
			'tag_description' => 'a',
			'tag_count'       => 1

		], 2);

		if( !$re){     // 如果创建失败 表示验证没有通过 输出错误提示信息
			exit($tag->getError());
		}else{     // 验证通过 可以进行其他数据操作
		}
		var_dump($re);
		//		var_dump($tag);
		//		$this->display();
	}

}