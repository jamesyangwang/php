<?php

class Car
{

    static $wheels = 4;
    var $hood = 1;

    function moveWheels()
    {
        Car::$wheels = 10;
    }


}

$bmw = new Car();

echo Car::$wheels . "<br />";

//$bmw->moveWheels();
Car::moveWheels();

echo Car::$wheels;




