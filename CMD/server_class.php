<?php
/**
 * Created by PhpStorm.
 * User: Loven
 * Date: 2017-11-13
 * Time: 18:37
 */
//{'title':"id",'data':"teacher_id"},
//{'title':"name",'data':"teacher_name"},
//{'title':"pwd",'data':"teacher_password"},//隐藏
//{'title':"email",'data':"teacher_email"},
//{'title':"date",'data':"teacher_date"},
//{'title':"note",'data':"teacher_note"},
//{'title':"action",'data':null,'class':"align-center"} // 自定义列
//],

//$draw = empty($_GET['draw'])?$_POST['draw']:$_GET['draw']; //第几次请求
$infos = array(
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"a", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"xiaoming", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"xiaoming", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"ds", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"cc", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"ff", "alias"=>'1', "img"=>'email'),
	array("id"=>2, "name"=>"hh", "alias"=>'1', "img"=>'email'),
);
echo json_encode(array(
//	"draw" => $draw,
	"recordsTotal" =>111,  // necessary
	"recordsFiltered" =>111, // necessary
	"data" =>$infos // necessary
),JSON_UNESCAPED_UNICODE);
