<?php

class Car5
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct($wheels)
    {
        echo $this->wheels = $wheels . "<br />";
    }
}

$bmw = new Car5(5);
$truck = new Car5(10);
$semi = new Car5(15);
