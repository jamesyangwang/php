<?php

namespace Chatter\MyMiddleware;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Logging
{
    public function __invoke($request, $response, $next)
    {
        $log = new Logger('index.php');
        $log->pushHandler(new StreamHandler(__DIR__ . "/logs/mono.log", Logger::DEBUG));

        error_reporting(E_ALL);

        // Default: "C:\xampp\php\logs\php_error_log"
        // From php.ini setting
//        ini_set('display_errors', 'Off');
//        dump(ini_get('error_log'));

        // "C:\Users\james_wang2\git\php\slim\src\Chatter\MyMiddleware/../../../logs/my_error.log"
        // Same as: "logs/my_error.log"
//        ini_set('error_log', __DIR__ . '/../../../logs/my_error.log');
//        dump(ini_get('error_log'));

        // "logs/my_error.log"
//        ini_set('error_log', 'logs/my_error.log');
//        dump(ini_get('error_log'));

        // php://stdout & stderr mapped to Apache Error Log
        // "/c/xampp/apache/logs/error.log"
//        ini_set('error_log', 'php://stdout');
//        ini_set('error_log', 'php://stderr');
//        dump(ini_get('error_log'));

        error_log($request->getMethod() . " -- " . $request->getUri());

        // print_r()
        // var_dump()
        // 'symfony/var-dumper' - dump()

//    echo "This line is from 'echo'";
//        fwrite(STDOUT, "This line is from fwrite(STDOUT)");
//        fwrite(STDERR, "This line is from fwrite(STDERR)");
//        file_put_contents("php://stderr", "This line is from file_put_contents(STDERR)");

        // Windows: Event Viewer -> Application
        // Linux: /var/log/user.log
//        syslog(LOG_DEBUG, $request->getMethod() . " -- " . $request->getUri());

        $response = $next($request, $response);
        return $response;
    }
}