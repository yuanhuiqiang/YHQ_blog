<?php

/**
 * 检查'YYYY-MM-DD HH:MM:SS'
 */
function checkDatetimeFormat($value){
	//检查日期格式
	$res_1 = preg_match("/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/s",$value);
	//检查日期合法性
	$res_2 = strtotime($value);
	if($res_1 && $res_2){
		return true;
	}else{
		return false;
	}

}

function delEmptyItem(array &$data){
	$del_key_arr = [];
	foreach($data as $key=>$v){
		if(empty($v)){
			array_push($del_key_arr,$key);
			continue;
		}
		if(is_array($v)){
			delEmptyItem($v);
		}
	}
	foreach($del_key_arr as $dkey){
		unset($data[$dkey]);
	}
}


