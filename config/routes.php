<?php

use Ishop\Router;

//default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);


Router::add('^$', ['controller' => 'Main', 'action' => 'index']); // контроллер по умолчанию маин, действие по умолчанию экшен
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
