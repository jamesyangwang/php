<?php
$float = 3.14;
echo $float + 7;
echo "\n";
echo 4/3;
echo "\n";
echo round($float, 1);
echo "\n";
echo ceil($float);
echo "\n";
echo floor($float);
//echo 1/0;
$int = 3;
echo "Is {$float} integer? " . (is_int($float) ? 'true' : 'false');
echo "\n";
echo "Is {$int} float? " . (is_float($int) ? 'true' : 'false');
echo "\n";
$str = "hello";
echo "Is '{$str}' numeric? " . (is_numeric($str) ? 'true' : 'false');
