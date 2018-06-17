<?php
$ages = [4, 8, 15, 16, 23, 42];
foreach ($ages as $age) {
    echo "Age: {$age}\n";
}

echo "\n";

$person = [
    "first_name" => "Kevin",
    "last_name" => "Skoglund",
    "address" => "123 Main Street",
    "city" => "Beverly Hills",
    "state" => "CA",
    "zip_code" => "90210"
];

foreach ($person as $attribute => $data) {
    $attribute = ucwords(str_replace("_", " ", $attribute));
    echo "{$attribute}: {$data}\n";
}