<?php

namespace core\lib;

class route
{
    public $controller;
    public $action;

    public function __construct()
    {
//        p('route ok');
//        p($_SERVER);
//        p($_SERVER['REQUEST_URI']);
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
//            echo trim($path, '/');
            $patharr = explode('/', trim($path, '/'));
            if (isset($patharr[0])) {
                $this->controller = $patharr[0];
                unset($patharr[0]);
            }
            if (isset($patharr[1])) {
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else {
                $this->action = config::get('ACTION', 'route');
            }
//            p($patharr);
            $count = count($patharr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($patharr[$i + 1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i += 2;
            }
//            p($_GET);

        } else {
            $this->controller = config::get('CTRL', 'route');
            $this->action = config::get('ACTION', 'route');
        }
    }
}