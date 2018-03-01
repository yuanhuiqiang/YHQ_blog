<?php
namespace Blog\Controller;

use Think\Controller;
use Blog\Common\Page;

class IndexController extends Controller{
	public function index(){
		/**
		 * 可能提交的参数有：页码  分类id  标签id  最新 最热
		 */
		$page = I('get.p', 1);
		$page_size = 10;
		$limit            = [($page-1)*2, $page_size];
		$search['cat_id'] = I('get.cat', '');
		$search['tag_id'] = I('get.tag', '');
		$search['post_title'] = I('get.keyword', '');
		$filter           = I('get.filter', '');
		$order            = [];
		switch($filter){
			case 'recent':
				$order['post_date'] = 'desc';
				break;
			case 'view':
				$order['post_access_count'] = 'desc';
				break;
			case 'comment':
				$order['comment_count'] = 'desc';
				break;
		}

		//文章列表面板
		$post_list  = D("BlogPost", 'Logic')->getPostList($limit, $search, $order);
		//分页html
		$post_count = D("BlogPost", 'Logic')->getCount($search);
		$page      = new Page($post_count,$page_size);
		$page->setConfig('theme','%UP_PAGE% %LINK_PAGE% %DOWN_PAGE%');
		$page_html = $page->show();

		//分类面板
		$cat_list = D("BlogCat", 'Logic')->getCatList(1);
		//标签面板
		$tag_list = D("BlogTag", 'Logic')->getTagList(1);

		//最新最热等标签链接
		$filter_url_param = [];
		!empty($search['cat_id']) && $filter_url_param['cat'] = $search['cat_id'];
		!empty($search['tag_id']) && $filter_url_param['tag'] = $search['tag_id'];
		$filter_url = ['recent'=>'','view'=>'','comment'=>''];
		array_walk($filter_url, function(&$url,$key) use ($filter_url_param,$filter){
			$url = urldecode(U('',array_merge($filter_url_param,['filter'=>$key] )));
		});


		$this->assign('filter_url', $filter_url);
		$this->assign('current_filter', $filter);
		$this->assign('current_tag', $search['tag_id']);
		$this->assign('current_cat', $search['cat_id']);
		$this->assign('tag_list', $tag_list);
		$this->assign('cat_list', $cat_list);
		$this->assign('post_list', $post_list);
		$this->assign('page_html', $page_html);
		$this->display();
	}

	/**
	 * 文章页面
	 */
	public function detail(){
		$post_id = I('get.id');
		$this->assign("post_id",$post_id);
		$this->display();
	}

	/**
	 * 文章数据
	 */
	public function ajaxDetail(){
		$post_id = I('get.id');
		$post = D("BlogPost","Logic")->getPostById($post_id);

		if(!empty($post)){
			$res = array("status"=>1,"data"=>$post,"info"=>"查询成功");
		}else{
			$res = array("status"=>0,"data"=>$post,"info"=>"查询失败");
		}
		$this->ajaxReturn($res,'JSON');
	}

}
