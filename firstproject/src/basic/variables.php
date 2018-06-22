<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>
<body>
<?php
$var1 = 10;
echo $var1;

echo "<br />";

$var1 = 100;
echo $var1;

echo "<br />";

$var2 = "Hello World!";
echo $var2;

echo "<br />";

$str = "hello";
echo "Is '${str}' numeric? " . (is_numeric($str) ? 'true' : 'false');
?>
</body>
</html>
