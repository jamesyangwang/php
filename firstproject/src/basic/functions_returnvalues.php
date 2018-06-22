<?php
function add($val1, $val2) {
    return $val1 + $val2;
}

echo add(1, 2);

function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add, $subt);
}

echo "\n";
$result_array = add_subt(3, 2);
echo print_r($result_array) . "\n";
echo $result_array[0] . "\n";
echo $result_array[1] . "\n";

list($add_result, $subt_result) = add_subt(4, 5);
echo $add_result . "\n";
echo $subt_result;

function test($val1, $val2) {
    $val2 += $val1;
}

echo "\n";
$v1 = 1;
$v2 = 2;
echo "v2: " . $v2. "\n";
test($v1, $v2);
echo "v2: " . $v2;
