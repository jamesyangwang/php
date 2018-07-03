<?php

//phpinfo();

require_once 'vendor/autoload.php';

$app = new \Slim\App();
//http://myslim.com/hello/James
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello, " . $args['name']);
});
$app->run();
