<?php
class BaseController 
{
	protected $loader;

	function __construct()
	{
		// require CONFIG_PATH. "config.php";
		$this->loader = new loader();
	}

	public function redirect($url,$message,$wait = 0) {
		if ($wait == 0) {
			header('Location:$url');
		} else {
			include CURR_VIEW_PATH.'message.html';
		}
		exit;
	}

	public function view($view) {
		include VIEW_PATH."$view.view.php";
	}
}