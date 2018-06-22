<?php
$number = [8, 23, 15, 42, 16, 4];
echo count($number) . "\n";
echo max($number) . "\n";
echo min($number) . "\n";
rsort($number);
echo print_r($number) . "\n";
sort($number);
echo print_r($number) . "\n";
echo $num_string = implode(" * ", $number) . "\n";
echo print_r(explode(" * ", $num_string)) . "\n";
echo (in_array(15, $number) ? "yes" : "no"). "\n";
echo (in_array(18, $number) ? "yes" : "no"). "\n";
