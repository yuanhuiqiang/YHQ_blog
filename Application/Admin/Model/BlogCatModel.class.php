<?php
namespace Admin\Model;
use Think\Model;
class BlogCatModel extends Model {
	protected $patchValidate = true; // 系统支持数据的批量验证功能
	protected $_validate = array(
		array('cat_name','require','分类名称必须填写！',self::MUST_VALIDATE ,'',self::MODEL_BOTH),
		array('user_id','require','非法用户',self::MUST_VALIDATE ,'',self::MODEL_BOTH),
		array('cat_name,user_id','checkNameUniqueInsert','分类名已存在',self::MUST_VALIDATE ,'callback',self::MODEL_INSERT),
		array('cat_name,user_id,cat_id','checkNameUniqueUpdate','分类名已存在',self::MUST_VALIDATE ,'callback',self::MODEL_UPDATE),

		array('cat_parent_id','checkParentId','父级分类有误',self::VALUE_VALIDATE,'callback',self::MODEL_BOTH), // 自定义函数验证密码格式
	);


	function checkParentId($pid){
		if($pid==0){
			return true;
		}
		$res = $this->field("cat_id")->find($pid);
		return empty($res)?false:true;

	}

	function checkNameUniqueInsert($arg){
		$res = $this->field("cat_id")->fetchSql(false)->where(['cat_name'=>$arg['cat_name'],'user_id'=>$arg['user_id']])->find();
		return empty($res)?true:false;
	}

	function checkNameUniqueUpdate($arg){
		$res = $this->field("cat_id")->fetchSql(false)->where([
			'cat_name'=>['EQ',$arg['cat_name']],
			'user_id'=>['EQ',$arg['user_id']],
			'cat_id'=>['NEQ',$arg['cat_id']]
		])->find();
		return empty($res)?true:false;
	}


}
