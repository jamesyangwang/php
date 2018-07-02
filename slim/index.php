<?php
//phpinfo();

require_once 'bootstrap.php';
require_once 'vendor/autoload.php';

use Chatter\Model\Message;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('index.php');
$log->pushHandler(new StreamHandler(__DIR__ . "/logs/mono.log", Logger::DEBUG));

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
    $log->debug(json_encode($payload));
    return $response->withStatus(200)->withJson($payload);

//    return $response->write("List of messages: ");
});
$app->run();

