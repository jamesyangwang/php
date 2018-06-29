<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex()
    {
        //httpd.conf
        //DocumentRoot "C:\Users\james_wang2\git\php\yii"

        //hosts
        //172.16.123.1	myyii.com

        //http://myyii.com/basic/web/index.php
        //http://myyii.com/basic/web/index.php?r=hello/index
        //http://myyii.com/basic/web/?r=hello/index

        echo 'Hello World!';
    }
}
