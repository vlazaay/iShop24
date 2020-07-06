<?php

namespace ishop24\base;

abstract class Controller
{
	public $route;
	public $controller;
	public $model;
	public $view;
	public $prefix;
	public $data = [];
	public $meta = [];

	public function __construct($route){
			$this->route = $route;
			$this->controller = $route['controller'];
			$this->model = $route['controller'];
			$this->view = $route['action'];
			$this->prefix = $route['prefix'];
	}
}
