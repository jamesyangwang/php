<?php

namespace Chatter\MyMiddleware;

use Chatter\MyModels\User;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Authentication
{

    private $log;

    public function __construct()
    {
        $this->log = new Logger('Authentication.php');
        $this->log->pushHandler(new StreamHandler("logs/mono.log", Logger::DEBUG));
        $this->log->info("__construct() done.");
    }

    public function __invoke($request, $response, $next)
    {
        $this->log->info("__invoke() started.");
//        $this->log->info(json_encode($request, true));
        dump($request);
        $auth = $request->getHeader('Authorization');
        $this->log->info("getting auth info from header...");
        dump($auth);
        $_apikey = $auth[0];
        $apikey = substr($_apikey, strpos($_apikey, ' ') + 1);

        $user = new User();
        if (!$user->authenticate($apikey)) {
            $response->withStatus(401);
            $this->log->info("Invalid API Key!");
            $this->log->info("__invoke() done.");
            return $response;
        }
        $response = $next($request, $response);
        $this->log->info("__invoke() done.");
        return $response;
    }
}