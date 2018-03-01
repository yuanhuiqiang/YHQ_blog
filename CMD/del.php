<?php
/**
 * Created by PhpStorm.
 * User: Loven
 * Date: 2017-11-13
 * Time: 19:07
 */
$id=$_GET['id'];
echo json_encode(array(
	"status"=>true,
	// "data"=>"this is data~",
	"id"=>$id
),JSON_UNESCAPED_UNICODE);