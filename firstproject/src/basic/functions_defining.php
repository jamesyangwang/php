<?php
function say_hello() {
    echo "Hello World!\n";
}

say_hello();

function say_hello_to($word) {
    echo "Hello " . $word . "\n";
}

say_hello_to("World!");
