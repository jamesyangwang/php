<?php

namespace app\controller;

use app\model\catModel;
//use app\model\model;

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

//        $temp = \core\lib\config::get('CTRL', 'route');
//        p($temp);
//        $temp = \core\lib\config::get('ACTION', 'route');
//        p($temp);

//        $model = new model();
//        dump($model);

//        $data = array(
//            'name' => 'ETHAN',
//            'order' => '4'
//        );
//        $model->insert('cat', $data);

//        $results = $model->select('cat', '*');
//        dump($results);

//        $model = new catModel();
//        dump($model->lists());
//        $model->setOne(4, $data);
//        dump($model->getOne(4));
//        $model->delOne(3);
//        dump($model->lists());

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