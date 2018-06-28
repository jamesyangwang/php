<?php

//define('ROOT', realpath('./'));
//define('CORE', ROOT . '/core');
//define('APP', ROOT . '/app');

define('CORE', 'core');
define('APP', 'app');

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

require_once CORE . '/common/function.php';
require_once CORE . '/framework.php';

spl_autoload_register('\core\framework::load');

//p(FRAMEWORK);

\core\framework::run();

