<?php
namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = 'passw0rd';
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {
            p($e->getMessage());
        }
    }
}
