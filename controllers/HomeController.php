<?php

class HomeController 
{
	function __construct()
	{
	}

	public function index()
	{
		require 'templates/header.php';
		require 'templates/container.php';
		require 'templates/portafolio.php';
		require 'templates/about.php';
		require 'templates/footer.php';
	}
}
?>