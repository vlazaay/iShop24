<?php 
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS.'/functions.php';
require_once CONF.'/routes.php';

new \ishop24\App();

//throw new Exception('страница не найдена', 404);

//debug(\ishop24\Router::getRoutes());