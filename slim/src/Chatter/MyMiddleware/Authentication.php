<?php

namespace Chatter\MyMiddleware;

use Chatter\MyModels\User;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

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
//        dump($request);
        // 'Authorization' will be filtered out by default
        // need to update '.htaccess' to keep it in header
        $auth = $request->getHeader('Authorization');
        $this->log->info("getting auth info from header...");
//        dump($auth);
        $_apikey = $auth[0];
        $apikey = substr($_apikey, strpos($_apikey, ' ') + 1);

        $user = new User();
        if (!$apikey || !$user->authenticate($apikey)) {
            $this->log->info("Invalid API Key!");
            $this->log->info("__invoke() done.");
            return $response->withStatus(401);
        }
        $response = $next($request, $response);
        $this->log->info("__invoke() done.");
        return $response;
    }
}

