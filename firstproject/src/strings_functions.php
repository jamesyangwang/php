<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings Functions</title>
</head>
<body>
<?php
$first = "the quick brown Fox";
$second = " jumped over the lazy Dog.";
$third = $first;
$third .= $second;
echo "Original: " . $third;
?><br/>
<br/>
Lower case: <?php echo strtolower($third); ?><br/>
Upper case: <?php echo strtoupper($third); ?><br/>
Upper first: <?php echo ucfirst($third); ?><br/>
Upper word: <?php echo ucwords($third); ?><br/>
<br/>
Length: <?php echo strlen($third); ?><br/>
Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br/>
Search: <?php echo strstr($third, "brown"); ?><br/>
Replace: <?php echo str_replace("quick", "super-fast", $third); ?><br/>
<br/>
Repeat: <?php echo str_repeat($third, 2); ?><br/>
Make substring: <?php echo substr($third, 5, 10); ?><br/>
Find position: <?php echo strpos($third, "brown"); ?><br/>
Find character: <?php echo strchr($third, "z"); ?><br/>
</body>
</html>
