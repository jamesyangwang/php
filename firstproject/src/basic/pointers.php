<?php
$ages = [4, 8, 15, 16, 23, 42];
echo "1: " . current($ages) . "\n";
next($ages);
echo "2: " . current($ages) . "\n";
next($ages);
next($ages);
echo "3: " . current($ages) . "\n";
prev($ages);
echo "4: " . current($ages) . "\n";

echo "\n";
reset($ages);
while ($age = current($ages)) {
    echo $age . " ";
    next($ages);
}