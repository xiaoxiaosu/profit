<?php 
	
	$menus = array();

	$menus['user'][] = array('index'=>array('title'=>'用户列表','url'=>'/user/index'));
	$menus['user'][] = array('create'=>array('title'=>'添加用户','url'=>'/user/create'));

	return $menus;
 ?>