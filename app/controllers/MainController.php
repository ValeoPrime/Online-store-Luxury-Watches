<?php


namespace app\controllers;



class MainController extends AppController
{

    public function indexAction(){

        $posts = \R::findAll('test');

        $this->setMeta('заголовок из контроллера', 'Описание', "Ключевики");
        $name = 'Valik';
        $age = '32';
        $names = ['Dimas', 'Alkash'];
        $this->set(compact('name', 'age', 'names', 'posts'));

    }

}


