<?php
$bar = "outside";

echo "1: " . $bar . "\n";
foo($bar);
echo "2: " . $bar . "\n";

function foo($bar) {
    global $bar;
    if (isset($bar)) {
        echo "foo: " . $bar . "\n";
    }
    $bar = "inside";
}
