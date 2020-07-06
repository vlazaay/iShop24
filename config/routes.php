<?php

use ishop24\Router;




//defaulte routes ^ - начало строки $ - конец строки

//admin routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']); //?P Именованные подмаски
Router::add('^admin/?(?<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']); // пустая строка (главная страница сайта)
Router::add('^(?<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');