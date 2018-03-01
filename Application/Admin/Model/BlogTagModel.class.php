<?php
namespace Admin\Model;

use Think\Model;

class BlogTagModel extends Model{
	protected $patchValidate = true; // 系统支持数据的批量验证功能
	protected $_validate = array(
		// 0 存在就验证  1 必须验证  2 不为空时验证     1 增加时验证 2 编辑时验证 3 两种情况都验证
		array('tag_name','require','标签名称必须填写！',self::MUST_VALIDATE ,'',self::MODEL_BOTH),
		array('user_id','require','非法用户',self::MUST_VALIDATE ,'',self::MODEL_BOTH),
		array('tag_name,user_id','checkNameUniqueInsert','标签名已存在',self::MUST_VALIDATE ,'callback',self::MODEL_INSERT),
		array('tag_name,user_id,tag_id','checkNameUniqueUpdate','标签名已存在',self::MUST_VALIDATE ,'callback',self::MODEL_UPDATE),
	);

	function checkNameUniqueInsert($arg){
		$res = $this->field("tag_id")->fetchSql(false)->where(['tag_name'=>$arg['tag_name'],'user_id'=>$arg['user_id']])->find();
		return empty($res)?true:false;
	}

	function checkNameUniqueUpdate($arg){
		$res = $this->field("tag_id")->fetchSql(false)->where([
			'tag_name'=>['EQ',$arg['tag_name']],
			'user_id'=>['EQ',$arg['user_id']],
			'tag_id'=>['NEQ',$arg['tag_id']]
		])->find();
		return empty($res)?true:false;
	}
}
