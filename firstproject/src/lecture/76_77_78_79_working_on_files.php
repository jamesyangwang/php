<?php

$file = "working_on_files.txt";

if ($handle = fopen($file, 'w')) {
    fwrite($handle, "PHP file writing...");
    fclose($handle);

} else {
    echo "Could not open the file!";
}

if ($handle = fopen($file, 'r')) {
    echo $content = fread($handle, filesize($file));
    fclose($handle);

} else {
    echo "Could not read the file!";
}

unlink("working_on_files.txt");

