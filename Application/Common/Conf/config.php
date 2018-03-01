<?php
//  加载常量配置文件
require_once('constant.php');


return array(

	'LOAD_EXT_FILE' =>'common',//加载自定义公共函数Common/common.php，默认是在Common/function.php,
	'LOAD_EXT_CONFIG'=>'db', // 加载自定义配置文件,默认是Conf/config.php


	'DEFAULT_MODULE'        =>  'Blog',  // 默认模块
	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
	'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	'MODULE_ALLOW_LIST'    =>    array(),// 允许访问的模块列表，空表示所有
	'MODULE_DENY_LIST'      =>  array('Common','Runtime','User'),// 设置禁止访问的模块列表

	'URL_MODULE_MAP'    =>    array('test'=>'admin'),//直接访问Admin不存在，访问test才行，若要放行禁止用映射后的名字test，模块映射的模块必须使用小写定义

	'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名或者IP配置
	'APP_SUB_DOMAIN_RULES'    =>    array(
		'm.yhqblog.com'   => 'Mobile/',  // 手机访问网站，这个域名后期可以从配置文件中取
	),
	'URL_CASE_INSENSITIVE'=>true,

	'DEFAULT_FILTER'        => 'htmlspecialchars,addslashes',   // 系统默认的变量过滤机制

	'SHOW_PAGE_TRACE'           =>0,         //显示调试信息

	'ERROR_PAGE'=>'/index.php/Home/Tperror/tp404.html', //错误页面



/**
 *  映射字段
 *'ORDER_STATUS' => array(
0 => '待确认',
1 => '已确认',
2 => '已收货',
3 => '已取消',
4 => '已完成',//评价完
5 => '已作废',
),
 *
 */


);