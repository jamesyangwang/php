<?php

define('FRAMEWORK', realpath('./'));
define('CORE', FRAMEWORK.'/core');
define('APP', FRAMEWORK.'/app');

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

require_once CORE.'/common/function.php';
require_once CORE.'/framework.php';

//p(FRAMEWORK);

\core\framework::run();

