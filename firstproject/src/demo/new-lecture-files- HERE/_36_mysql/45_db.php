<?php

$connection = mysqli_connect('localhost', 'root', 'passw0rd', 'loginapp');
if (!$connection) {
    die("Database connection failed");
}
