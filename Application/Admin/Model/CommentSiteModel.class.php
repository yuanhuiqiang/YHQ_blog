<?php
namespace Admin\Model;

use Think\Model;

class CommentSiteModel extends Model{
	protected $patchValidate = true; // 系统支持数据的批量验证功能
	protected $_validate = array(
		// 0 存在就验证  1 必须验证  2 不为空时验证     1 增加时验证 2 编辑时验证 3 两种情况都验证

		array('site_appid','require','必须指定appid',self::MUST_VALIDATE ,'',self::MODEL_INSERT),
		array('user_id','require','非法用户',self::MUST_VALIDATE ,'',self::MODEL_INSERT),

		array('site_name','require','标签名称必须填写！',self::MUST_VALIDATE ,'',self::MODEL_BOTH),
		array('site_url','url','无效地址',self::MUST_VALIDATE ,'',self::MODEL_BOTH),



//		array('site_id,user_id','checkUniqueInsert','appid已存在',self::MUST_VALIDATE ,'callback',self::MODEL_INSERT),
//		array('site_id,user_id','checkUniqueUpdate','appid不存在',self::MUST_VALIDATE ,'callback',self::MODEL_UPDATE),
	);

	function checkUniqueInsert($arg){

		if(empty(trim($arg['site_id']))) return false;
		$res = $this->field("site_id")->fetchSql(false)->where(['site_id'=>$arg['site_id']])->find();
		return empty($res)?true:false;
	}

	function checkUniqueUpdate($arg){
		$res = $this->field("site_id")->fetchSql(false)->where([
			'site_id'=>['EQ',$arg['site_id']],
			'user_id'=>['EQ',$arg['user_id']],
		])->find();
		return empty($res)?false:true;
	}

	//生成10位的唯一ID
	function generateAppid(){
		$id = substr(md5(time()),0,10);
		$res = $this->field("site_id")->fetchSql(false)->where(['site_id'=>$id])->find();
		if(empty($res)){
			return $id;
		}else{
			return $this->generateID();
		}

	}
}
