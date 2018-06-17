<?php
$count = "2";
echo gettype($count). "\n";

$count += 3;
echo gettype($count). "\n";

$cat = "I hava " . $count . " cats";
echo gettype($count). "\n";
echo gettype($cat). "\n";

settype($count, "integer");
echo gettype($count). "\n";

$count = (string)$count;
echo gettype($count). "\n";
