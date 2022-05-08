<?php
function template_list(array $list){
	include('page/template/list.php');
}

function template_img_list($title, $start, $end){
	global $page;
	
	$map = [
		'数学' => 'mt',
		'物理' => 'wl',
		'英语' => 'En'
	];
	
	$prefix = $map[$title] ?? '';
	
	include('page/template/img-list.php');
}

function file_type_icon($ext){
	include('page/template/file-type.php');
}