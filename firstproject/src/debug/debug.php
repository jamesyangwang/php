<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// set error reporting
error_reporting(E_ALL | E_STRICT);

echo '<h1>display_errors: before</h1>';
var_dump(ini_get('display_errors'));
echo '<h1>Triggering notice</h1>';
// to trigger error for demo
//var_dump($error);

echo '<h1>Setting errors</h1>';
// do not display errors: 0
ini_set('display_errors', 0);

echo '<h1>display_errors: after</h1>';
var_dump(ini_get('display_errors'));
echo '<h1>Triggering notice</h1>';
var_dump($error);

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('log_errors_max_len', 0);
//ini_set('error_log', './error_log.txt');

//ini_set('memory_limit', '1K');
//var_dump((object) range(0, 2000));

$array = array();
var_dump($array);
if (isset($array[0])) {
    var_dump($array[0]);
}
$object = new stdClass();
if (isset($object->property)) {
    var_dump($object->pro);
}

class Strict
{
    static function trigger()
    {
        echo 'Triggered' . '<br /><br />';
    }
}

Strict::trigger();

//$deprecated = & new stdClass();
//var_dump($deprecated);
//var_dump(split(',', 'one,two,three'));

register_shutdown_function('shutdown_notify');
function shutdown_notify()
{
    $error = error_get_last();
    if (!empty($error) && in_array($error['type'], array(E_ERROR, E_USER_ERROR))) {
        echo '<h1>Sorry, something went horribly wrong; the team has been notified.</h1>';
//        var_dump($error);
//        var_dump($_SERVER);
//        var_dump(debug_backtrace());
//        $to = 'james.wang@digicert.com';
//        $subject = "[{$_SERVER['SERVER_NAME']}] Fatal error in {$error['file']} on line {$error['line']}";
//        $message = var_export($error, TRUE) . PHP_EOL;
//        $message .= var_export($_SERVER, TRUE) . PHP_EOL;
//        mail($to, $subject, $message);
    }
}

//trigger_error('Custom notice', E_USER_NOTICE);
//trigger_error('Custom warning', E_USER_WARNING);
//trigger_error('Custom error', E_USER_ERROR);
//echo 'will not execute';

function a($arg)
{
//    xdebug_debug_zval('arg');
    b($arg);
}

function b(&$arg)
{
//    xdebug_debug_zval('arg');
    d('delta');
}

function d($arg)
{
//    xdebug_debug_zval('arg');
//    var_dump(debug_backtrace());
//    xdebug_break();
    $declared = 'variable';
    var_dump(xdebug_get_declared_vars());
//    trigger_error('Custom notice', E_USER_NOTICE);
//    trigger_error('Custom warning', E_USER_WARNING);
//    trigger_error('Custom error', E_USER_ERROR);
}

a('alpha');

for ($i = 0; $i < 50; $i++) {
    slow();
}
slower();

echo '<br />done';

function slow() {
    for ($i = 0; $i < 10000; $i++) {
        echo '.';
    }
}

function slower() {
    usleep(50000);
}

?>
</body>
</html>


<!--
http://localhost.digicert.com/debug/debug.php?XDEBUG_PROFILE=1
http://localhost.digicert.com/debug/debug.php?XDEBUG_SESSION_START=13049
-->

