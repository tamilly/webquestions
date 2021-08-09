<?php
require_once 'model/user.php';
require_once 'DAO/dbConnection.php';

class UserDAO{
    private $connection;

    private function __construct(){
        //
    }

    public function insert(){
        $connection = new DBConnection;
        $connection->connect();
        $connection->test();
    }
}
?>