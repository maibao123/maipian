<?php
	$config = array(
		'viewconfig' => array(
			'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => 'tpl',  'compile_dir' => 'data/template_c'),
		'dbconfig' => array(
			'dbhost' => '127.0.0.1', 'dbuser'=>'root', 'dbpsw' => 'root' , 'dbname' => 'oa', 'dbcharset' => 'utf8')
	);
	
	$dir = dirname(__FILE__);

?>