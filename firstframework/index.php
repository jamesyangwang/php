<?php

define('ROOT', realpath('./'));

//define('CORE', ROOT . '/core');
//define('APP', ROOT . '/app');

define('CORE', 'core');
define('APP', 'app');

define('DEBUG', true);

require_once "vendor/autoload.php";

if (DEBUG) {
    //https://github.com/filp/whoops
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

// to trigger 'filp/whoops'
//ssssss();

//https://github.com/symfony/var-dumper
// to show symfony/var-dumper
//dump($_SERVER);

require_once CORE . '/common/function.php';
require_once CORE . '/framework.php';

spl_autoload_register('\core\framework::load');

//p(FRAMEWORK);

\core\framework::run();

