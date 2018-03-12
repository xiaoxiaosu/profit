<?php 
	
	$apis = array();

	$apis['user'][] = array('info'=>array('url'=>'user/info','desc'=>'用户信息展示'));
	$apis['user'][] = array('list'=>array('url'=>'user/list','desc'=>'用户列表展示'));

	return $apis;
 ?>