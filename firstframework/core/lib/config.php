<?php

namespace core\lib;

class config
{
    public static $conf = array();

    public static function get($name, $file)
    {
//        p(self::$conf);
        if (isset(self::$conf[$file])) return self::$conf[$file][$name];
//        p(1);
        $path = 'core\config\\' . $file . '.php';
//        p($file); exit();
        if (is_file($path)) {
            $config = include $path;
            self::$conf[$file] = $config;
            if (isset($config[$name])) {
                return $config[$name];
            } else {
                throw new \Exception('No such config item:' . $name);
            }
        } else {
            throw new \Exception('Could not find config file: ' . $file);
        }
    }

    public static function getAll($file)
    {
        if (isset(self::$conf[$file])) return self::$conf[$file];
        $path = 'core\config\\' . $file . '.php';
        if (is_file($path)) {
            /** @noinspection PhpIncludeInspection */
            $config = include $path;
            self::$conf[$file] = $config;
            return $config;
        } else {
            throw new \Exception('Could not find config file: ' . $file);
        }
    }
}