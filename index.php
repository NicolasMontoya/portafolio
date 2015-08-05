<?php
	require 'config.php';
	require 'controllers/FrontController.php';
	require 'controllers/HomeController.php';
	require 'controllers/ConversorController.php';
	require 'models/ConversorBase.php';
	

	if(empty($_GET['url']))
	{
		$url="home";
	}
	else{
		$url=$_GET['url'];
	}
	$controller=new FrontController($url);
	$controller->foundController();



?>