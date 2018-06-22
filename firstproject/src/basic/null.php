<?php
$var1 = null;
$var2 = "";

echo is_null($var1) ? "yes" : "no";
echo "\n" . (is_null($var2) ? "yes" : "no");
echo "\n" . (is_null($var3) ? "yes" : "no");

echo "\n" . (isset($var1) ? "yes" : "no");
echo "\n" . (isset($var2) ? "yes" : "no");
echo "\n" . (isset($var3) ? "yes" : "no");
