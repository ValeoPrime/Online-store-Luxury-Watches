<?php
define("DEBUG", 1);
// значение 1 режим разработки, показать все ошибки,
//значение 0 режим продакшн, ошибки скрыть, записать в лог

define("ROOT", dirname(__DIR__)); //указывает на текущую директорию, в нашем случае на корень сайта

define("WWW", ROOT.'/public'); //указывает на публичную папку
define("APP", ROOT.'/app'); //указывает на  папку app
define("CORE", ROOT.'/vendor/Ishop/core'); //указывает на  папку core
define("LIBS", ROOT.'/vendor/Ishop/core/libs'); //указывает на  папку libs
define("CACHE", ROOT.'/tmp/cache'); //указывает на  папку кеша
define("CONF", ROOT.'/config'); //указывает на  папку config
define("LAYOUT", 'watches'); //шаблон по умолчанию

// не забыть константу админ завести!!!

require_once ROOT. '/vendor/autoload.php'; // автозагрузчик