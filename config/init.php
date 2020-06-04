<?php
//1 - показать все ошибки.
define("DEBUG", 0);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop24/core');
define("LIBS", ROOT . '/vendor/ishop24/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
// шаблон
define("LAYOUT", 'default');

// http://ishop24:8080/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://ishop24:8080/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://ishop24:8080
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';