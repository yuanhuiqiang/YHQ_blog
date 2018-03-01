<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
	public function index(){
		$Model = new Model() ;// 实例化一个model对象 没有对应任何数据表
		$res = $Model->query("select * from yhq_blog_tag ");
		var_dump($res);
//		$this->display();
	}
}