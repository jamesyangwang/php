<?php

namespace core;

use core\lib\route;
use core\lib\log;

class framework
{
    public static function run()
    {
        //http://localhost.digicert.com/order/enroll/id/1/str/2/test/3
        //https://www.imooc.com/learn/696

        log::init();
        log::log($_SERVER, 'server.txt');
        log::log('test');
        log::log('test');

//        new model();

//        p('OK');
        $route = new route();
//        p($route);
        $controller = $route->controller;
        $action = $route->action;
//        p($controller);
//        p($action);
        $ctrlFile = APP . '/controller/' . $controller . 'Controller.php';
        $ctrlClass = APP . '\\controller\\' . $controller . 'Controller';
//        p($ctrlFile); exit();
        if (is_file($ctrlFile)) {
            /** @noinspection PhpIncludeInspection */
            require_once $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
            log::log('ctrl: ' . $ctrlClass . '; ' . 'action: ' . $action);
        } else {
            /** @noinspection PhpUnhandledExceptionInspection */
            throw new \Exception('Could not find Controller: ' . $ctrlFile);
        }
    }

    public static function load($class)
    {
//        p($class . '.php');
//        p(ROOT . '/' . $class . '.php');

        if (is_file($class . '.php')) {
            /** @noinspection PhpIncludeInspection */
            require_once $class . '.php';
        }
    }

}