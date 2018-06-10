<?php

require('mainconfig.php');
require('core/router/router.php');
require('core/autoload/autoload.php');

require('core/view/viewLoader.php');
require('core/view/view.php');

$viewLoader = new ViewLoader(ROOT.'/views/');
$view = new View($viewLoader);
$autoloader = new Autoload();
spl_autoload_register([$autoloader, 'load']);

$autoloader->register('viewloader', function(){
    return require(ROOT.'/core/view/viewLoader.php');
});

$view = new View( new ViewLoader(ROOT.'/views/') );
$router = new Router();