<?php
//phpinfo();

require_once 'bootstrap.php';
require_once 'vendor/autoload.php';

use Chatter\MyModels\Message;
use Chatter\MyMiddleware\Logging as ChatterLogging;

//Apache logs:
//C:\xampp\apache\logs
//PHP logs:
//C:\xampp\php\logs
//Monolog:
//$__DIR__/logs

//$log->warning('Foo');
//$log->error('Bar');

$settings = [
    'settings' => [
        'displayErrorDetails' => true
    ],
];

$app = new Slim\App($settings);
$app->add(new ChatterLogging());

//$app = new \Slim\App();
//http://myslim.com/messages

$app->get('/messages', function ($request, $response, $args) {
    $_message = new Message();
    global $log;
//    dump($_message);
    $messages = $_message->all();
//    dump($messages);

    $payload = [];
    foreach ($messages as $_msg) {
        $payload[$_msg->id] = [
            'body' => $_msg->body,
            'user_id' => $_msg->user_id,
            'created_at' => $_msg->created_at
        ];
    }
    return $response->withStatus(200)->withJson($payload);
//    return $response->withStatus(200);

//    return $response->write("List of messages: ");
});
$app->run();

