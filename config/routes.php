<?php

use ishop24\Router;

//defaulte routes ^ - начало строки $ - конец строки
Router::add('^$', ['controller' => 'Main', 'action' => 'index']); // пустая строка (главная страница сайта)
Router::add('^(?<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

//admin routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

