<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL & ~E_DEPRECATED);
echo error_reporting() . "\n";

function paint($room = "office", $color = "red")
{
//    var_dump(debug_backtrace()) . "\n";
    return "The color of the {$room} is {$color}.\n";
}

echo paint();
echo paint("bedroom", "blue");
echo paint("bedroom", null);
echo paint("bedroom");

//$var = "hello";
//echo $var . "\n";
//echo print_r($var) . "\n";
//echo gettype($var) . "\n";
//var_dump($var) . "\n";
//echo print_r(get_defined_vars()) . "\n";
