<?php
namespace Admin\Model;

use Think\Model;

class CommentPostModel extends Model{
	protected $patchValidate = true; // 系统支持数据的批量验证功能
	protected $_validate = array(
		// 0 存在就验证  1 必须验证  2 不为空时验证     1 增加时验证 2 编辑时验证 3 两种情况都验证

		array('user_id','require','非法用户',self::MUST_VALIDATE ,'',self::MODEL_INSERT),
		array('cp_uri','require','uri不能为空',self::MUST_VALIDATE ,'',self::MODEL_INSERT),
		array('cp_source_id','require','source_id不能为空',self::MUST_VALIDATE ,'',self::MODEL_BOTH),

		array('site_id,cp_source_id','','SID已存在',self::MUST_VALIDATE ,'unique',self::MODEL_BOTH), //unique 验证编辑时会排除当前主键
		array('site_id,user_id', 'checkSite','无效站点',self::MUST_VALIDATE ,'callback',self::MODEL_BOTH),


		array('cp_title','0,20','文章名不得超过20个字符 提示：特殊字符如 < > & 等将占据多个字符',self::MUST_VALIDATE,'length',self::MODEL_BOTH),
		array('cp_source_id','0,20','SID不得超过20个字符  提示：特殊字符如 < > & 等将占据多个字符',self::MUST_VALIDATE,'length',self::MODEL_BOTH),
		array('cp_uri','0,20','URI不得超过20个字符  提示：特殊字符如 < > & 等将占据多个字符',self::MUST_VALIDATE,'length',self::MODEL_BOTH),

	);

	function checkSite($arg){
		$res = D("CommentSite")->where(['site_id'=>$arg['site_id'],'user_id'=>$arg['user_id']])->find();
		return empty($res)?false:true;
	}

}
