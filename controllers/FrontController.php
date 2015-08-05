<?php
/**
* 
*/
class FrontController
{
	protected $url;
	protected $controller;
	function __construct($url)
	{
		$this->url=$url;
	}
	public function foundController(){
		if ($this->url=="home") {
			$controller = new HomeController();
			$controller->index();
		}
		elseif ($this->url=="conversor") {
			$controller = new ConversorController();
			$controller->index();
		}
	}
}
?>