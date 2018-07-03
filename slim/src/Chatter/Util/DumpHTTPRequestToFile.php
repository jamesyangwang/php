<?php

namespace Chatter\Util;

use DateTime;

class DumpHTTPRequestToFile
{
    public function execute()
    {
        $data = sprintf(
            "%s %s %s\n\nHTTP headers:\n",
            $_SERVER['REQUEST_METHOD'],
            $_SERVER['REQUEST_URI'],
            $_SERVER['SERVER_PROTOCOL']
        );
        foreach ($this->getHeaderList() as $name => $value) {
            $data .= $name . ': ' . $value . "\n";
        }
        $data .= "\nRequest body:\n";

        $date = new DateTime();
        $fileName = "logs/request." . $date->format('Y-m-d.H-i') . ".txt";

        file_put_contents(
            $fileName,
            $data . print_r($_REQUEST, true) . "\n*************************************************************\n", FILE_APPEND
//            $data . file_get_contents('php://input') . "\n*************************************************************\n", FILE_APPEND
        );
    }

    private function getHeaderList()
    {
        $headerList = [];
        foreach ($_SERVER as $name => $value) {
            if (preg_match('/^HTTP_/', $name)) {
                // convert HTTP_HEADER_NAME to Header-Name
                $name = strtr(substr($name, 5), '_', ' ');
                $name = ucwords(strtolower($name));
                $name = strtr($name, ' ', '-');
                // add to list
                $headerList[$name] = $value;
            }
        }
        return $headerList;
    }
}

