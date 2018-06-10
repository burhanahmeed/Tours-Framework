<?php

class Controller{
	protected $loader;

	public function __construct(){
		$this->loader = new loader();
	}

	public function redirect($url, $message, $wait = 0){
		if($wait == 0){
			header("location:$url");
		} else {
			include CURR_VIEW_PATH."message.html";
		}

		exit;
	}

	public function view($view) {
		include VIEW_PATH."$view.view.php";
	}
	
}