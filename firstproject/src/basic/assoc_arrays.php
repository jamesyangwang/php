<?php
$assoc = ["first_name" => "James", "last_name" => "Wang"];
echo $assoc["first_name"] . " " . $assoc["last_name"] . "\n";
$assoc["first_name"] = "Larry";
echo $assoc["first_name"] . " " . $assoc["last_name"] . "\n";
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5];
echo print_r($numbers1);
echo print_r($numbers2);
