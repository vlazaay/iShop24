<?php

namespace app\controllers;

class MainController extends AppController {

	public function indexAction(){
		//debug($this->route);
		//echo __METHOD__;]
		$this->setMeta('Главная страница', 'Описание', 'Ключевые слова');
		$name = "Vlad";
		$age = "31";
		$this->set(compact('name', 'age'));
	}

}
