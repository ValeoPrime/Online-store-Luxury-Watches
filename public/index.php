<?php
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';


new \Ishop\App();

//\Ishop\App::$app->setProperty('valik', 'molodca');
//debug(\Ishop\App::$app->getProperties());

//throw new Exception('Нихера не работает', 500);
echo '<br>Ты там где надо';

//debug(\Ishop\Router::getRoutes());
