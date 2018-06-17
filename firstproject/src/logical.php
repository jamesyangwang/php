<?php
$a = 4;
$b = 3;

if ($a > $b) {
    echo "a is larger than b";
} elseif ($a < $b) {
    echo "a is smaller than b";
} else {
    echo "a is equal to b";
}

echo '\n';
echo "\n";

// '==', '===', '>=', '<=', '<>', '!=', '!=='
// '&&', '||'
// '!'

$e = 100;
if (!isset($e)) {
    $e = 200;
}
echo $e;

echo "\n";

echo "The sum is " . (1 | 2);
echo "\n";
echo "The sum is " , 1 | 2;

echo "\n";

//$quantity = 0;
$quantity = "";
if (empty($quantity) && !is_numeric($quantity)) {
    echo "You must enter a quantity!";
}
