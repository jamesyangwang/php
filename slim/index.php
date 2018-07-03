<?php
//phpinfo();

require_once 'bootstrap.php';
require_once 'vendor/autoload.php';

use Chatter\MyModels\Message;
use Chatter\MyMiddleware\Logging as ChatterLogging;
use Chatter\MyMiddleware\Authentication as ChatterAuth;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//Apache logs:
//C:\xampp\apache\logs
//PHP logs:
//C:\xampp\php\logs
//Monolog:
//$__DIR__/logs

$log = new Logger('index.php');
$log->pushHandler(new StreamHandler("logs/mono.log", Logger::DEBUG));

$settings = [
    'settings' => [
        'displayErrorDetails' => true
    ],
];

$app = new Slim\App($settings);
$log->info("Created new Slim App.");
$log->info("Adding Authentication...");
$app->add(new ChatterAuth());
$log->info("Adding Logging...");
$app->add(new ChatterLogging());

//$app = new \Slim\App();
//http://myslim.com/messages

$app->get('/messages', function ($request, $response, $args) {

    global $log;
    $log->info('$app->get() started.');
//    dump($request);
    $_message = new Message();

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
    $log->info('$app->get() done.');
    return $response->withStatus(200)->withJson($payload);
//    return $response->withStatus(200);

//    return $response->write("List of messages: ");
});
$app->run();

