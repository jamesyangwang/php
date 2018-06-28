<?php

namespace app\controller;

class orderController
{
    public $assign = array();

    public function enroll()
    {
//        p('this is order!');
//        $model = new \core\lib\model();
//        $sql = 'select * from cat';
//        $ret = $model->query($sql);
//        p($ret->fetchAll());

        $data = 'Hello World!';
        $title = "Title";
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index.php');
    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file = APP . '/views/' . $file;
        if (is_file($file)) {
//            p($this->assign); exit();
            extract($this->assign);
            /** @noinspection PhpIncludeInspection */
            require_once $file;
        }
    }
}