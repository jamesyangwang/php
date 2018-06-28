<?php
namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
//        $dsn = 'mysql:host=localhost;dbname=test';
//        $username = 'root';
//        $passwd = 'passw0rd';

//        p(config::getAll('database')); exit();

        $database = config::getAll('database');
        $dsn = $database['DSN'];
        $username = $database['USERNAME'];
        $passwd = $database['PASSWD'];
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {
            p($e->getMessage());
        }
    }
}
