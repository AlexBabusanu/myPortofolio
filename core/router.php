<?php

class Router {
	public $url = [];
	public function load($list) {
		$router = new static;
		require $list;
		return $router;
	}
	public function insert($uri) {
		$this->url = $uri;
	}
	public function test($message){
		if(array_key_exists($message, $this->url)){
		return $this->url[$message];
		}
		else {
			return "controller/404.controller.php";
		}
	}
}