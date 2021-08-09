<?php

class DBConnection{
    private $con;

    public function __construct(){
        //
    }
    //Create connection
    public static function connect(){
        $this->con = new mysqli("localhost:3306", "root", "", "dbweb");
        //Check connection
        if($con->connect_error){
            die("Connection failed: " . $con->connect_error);
        }
        echo "Connected successfully";
    }

    public static function close_connection(){
        $this->con->close();
    }
    

}
?>