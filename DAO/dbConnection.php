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

    public function close_connection(){
        mysqli_close($this->con);
    }
    
    public function test(){
        $this->con = 1;
        echo $this->con;
        echo "its working";
    }
}
?>