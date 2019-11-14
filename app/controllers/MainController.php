<?php


namespace app\controllers;



use Ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){

        $brands = \R::find('brand', 'LIMIT 3');


        $this->setMeta('заголовок из контроллера', 'Описание', "Ключевики");
        $this->set(compact('brands'));

    }

}


