<?php

namespace Chatter\MyMiddleware;

class FileMove
{
    public function __invoke($request, $response, $next)
    {

        $response = $next($request, $response);

        return $response;
    }
}