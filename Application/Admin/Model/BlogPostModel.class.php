<?php
namespace Admin\Model;

use Think\Model;

class BlogPostModel extends Model{

	protected $patchValidate = true; // 系统支持数据的批量验证功能

	protected $_validate = array(
		// 0 存在就验证  1 必须验证  2 不为空时验证     1 增加时验证 2 编辑时验证 3 两种情况都验证

//		添加时
		array('post_date', 'checkDatetimeFormat', '发布时间有误', self::EXISTS_VALIDATE, 'function', self::MODEL_INSERT),
//		更新时
		array('post_id', 'require', '文章有误', self::MUST_VALIDATE, '', self::MODEL_UPDATE),
		array('post_modified', 'checkDatetimeFormat', '修改时间有误', self::EXISTS_VALIDATE, 'function', self::MODEL_UPDATE),
//		添加和更新时
		array('user_id', 'require', '非法用户', self::MUST_VALIDATE, '', self::MODEL_BOTH),
		array('post_title', 'require', '标题不能为空', self::EXISTS_VALIDATE, '', self::MODEL_BOTH),
		array('post_status', array(0, 4), '文章状态不正确', self::EXISTS_VALIDATE, 'between', self::MODEL_BOTH),//（0 publish/ 1 auto-draft/2 inherit等）
		array('post_private', array(0,2), '公开度不正确', self::EXISTS_VALIDATE, 'between', self::MODEL_BOTH),//公开度（0 公开 1 密码保护 2 私密 ）
		array('comment_status', array(0, 1), '评论状态不正确', self::EXISTS_VALIDATE, 'in', self::MODEL_BOTH),//评论状态（0 open/ 1 closed）



	);
	//callback和function的参数默认是一个附加参数，但若字段传递了值，两个会分别作为两个参数传递过去，字段值在前，附加参数在后
	protected $_auto = array(
		array('post_date', 'defaultDate',self::MODEL_INSERT,'callback'),  //
		array('post_modified', 'defaultDate',self::MODEL_UPDATE,'callback'),  //
		array('comment_status', '0', self::MODEL_BOTH, 'string'),//评论状态（0 open/ 1 closed）

	);

	/**
	 * 默认当前时间
	 */
	public function defaultDate($arg=''){
		if(empty($arg)){
			return date('Y-m-d H:m:s');
		}else{
			return $arg;
		}

	}

	/**
	 * 根据文章内容生成文章描述
	 */
	public function generateExcerpt($length=255){

		if(empty($this->post_excerpt)){
			$this->post_excerpt = substr($this->post_content,0,$length);
		}else{
			$this->post_excerpt = substr($this->post_excerpt,0,$length);
		}

	}


}
