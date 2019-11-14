<?php


namespace app\controllers;



use Ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){

        $posts = \R::findAll('test');

        $this->setMeta('заголовок из контроллера', 'Описание', "Ключевики");


    }

}


