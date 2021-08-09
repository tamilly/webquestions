<?php

class DBConnection{
    private $con;

    public function __construct(){
        //
    }
    //Create connection
    public static function connect(){
        $con = new mysqli("localhost:3306", "root", "", "dbweb");
        //Check connection
        if($con->connect_error){
            die("Connection failed: " . $con->connect_error);
            return null;
        }
        return $con;
    }

    public function getConnection(){
        return $this->con;
    }
    
}
?>