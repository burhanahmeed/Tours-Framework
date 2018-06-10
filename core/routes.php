<?php

$router->add('/',function() use ($view){
    $view->display('index');
});

$router->add('/about',function() use ($view){
    $view->display('index');
});