<?php 
	require 'environment.php';
	define("BASE", "http://localhost/mvc/");

	global $config;
	$config = array();
	if (ENVIRONMENT == "development") {
		$config['dbname'] = 'blog';
		$config['host']   = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}else{
		$config['dbname'] = 'blog';
		$config['host']   = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}

 ?>