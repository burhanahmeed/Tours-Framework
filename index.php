<?php
// require ('/views/index.php');
require('bootstrap.php');
require('core/routes.php');

$router->dispatch();

// $view->display('index');

// echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];