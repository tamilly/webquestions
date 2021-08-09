<?php

class DBConnection{
    private $con;

    public function __construct(){
        //
    }
    //Create connection
    public function connect(){
        $this->con = mysqli_connect("localhost:3306", "root", "", "dbweb");
        //Check connection
        if(!$this->con){
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
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