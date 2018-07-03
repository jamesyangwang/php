<?php
//phpinfo();

require_once 'bootstrap.php';
require_once 'vendor/autoload.php';

use Chatter\MyMiddleware\Authentication as ChatterAuth;
use Chatter\MyMiddleware\Logging as ChatterLogging;
use Chatter\MyModels\Message;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

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

//======================================================================================================================
$app->get('/messages', function ($request, $response, $next) {

    // dump request to logs
//    (new DumpHTTPRequestToFile)->execute();

    global $log;
    $log->info('$app->get() started.');
    // dump request to logs
//    $log->info(print_r($request, true));
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

//======================================================================================================================
$app->post('/messages', function ($request, $response, $next) {
    global $log;
    $_message = $request->getParam('body');
    $log->info('body from request: ' . print_r($_message, true));

    $imagepath = '';
    $files = $request->getUploadedFiles();
    $newfile = $files['file'];
    if ($newfile->getError() === UPLOAD_ERR_OK) {
        $uploadFileName = $newfile->getClientFilename();
        $newfile->moveTo("assets/images/" . $uploadFileName);
        $imagepath = "assets/images/" . $uploadFileName;
    }

    $message = new Message();
    $message->body = $_message;
    $message->image_url = $imagepath;
    $message->user_id = -1;
    $message->save();

    if ($message->id) {
        $payload = ['message_id' => $message->id,
            'message_uri' => urlencode('/messages/' . $message->id)];
        return $response->withJson($payload)->withStatus(201);
    } else {
        return$response->withJson("Create new message failed.")->withStatus(400);
    }
});

//======================================================================================================================
$app->delete('/messages/{message_id}', function ($request, $response, $args) {
    $message = Message::find($args['message_id']);
    $message->delete();

    if ($message->exists) {
        return $response->withStatus(400);
    } else {
        return $response->withStatus(204);
    }
});

$app->run();

//https://www.slimframework.com/docs/v3/objects/response.html



