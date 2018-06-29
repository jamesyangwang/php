<?php

namespace core\lib;

class log
{
    public static $class;

    public static function init()
    {
        $driver = config::get('DRIVER', 'log');
        $path = 'core\lib\driver\log\\' . $driver;
        self::$class = new $path;
    }

    public static function log($name, $file = 'log.txt')
    {
        self::$class->log($name, $file);
    }
}