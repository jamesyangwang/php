<?php
$numbers = array(4, 8, 15, 16, 23, 42);
echo $numbers[0];
echo "\n";
$mixed = array(6, "fox", "dog", array("x", "y", "z"));
echo $mixed[2] . "\n";
echo $mixed[3] . "\n";
echo print_r($mixed[3]) . "\n";
echo $mixed[3][1] . "\n";
echo $mixed . "\n";
echo print_r($mixed) . "\n";

$mixed[2] = 'cat';
$mixed[4] = 'mouse';
$mixed[] = 'horse';
echo print_r($mixed) . "\n";

$array = [1, 2, 3];
echo print_r($array);

