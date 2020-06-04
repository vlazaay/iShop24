<?php 
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS.'/functions.php';

new \ishop24\App();
debug(\ishop24\App::$app->getProperties());