<?php


namespace app\controllers;


class PoliticController extends AppController
{
    public function showAction(){
        $this->loadView('politic_modal');
    }
}