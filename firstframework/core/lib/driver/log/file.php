<?php
namespace core\lib\driver\log;

use core\lib\config;

class file
{
    private $path;

    public function __construct()
    {
        $this->path = config::get('OPTION', 'log')['PATH'];
    }

    public function log($msg, $file = 'log.txt'){
//        p($name);
//        p($this->path);
        $curPath = $this->path . date('YmdH');
        if (!is_dir($curPath)) {
            mkdir($curPath, '777', true);
        }
        return file_put_contents($curPath. '/' . $file, date('Y-m-d H:i:s') . ' - ' . json_encode($msg) . PHP_EOL, FILE_APPEND);
    }
}
