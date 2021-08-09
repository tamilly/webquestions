<?php
require_once 'model/user.php';
require_once 'DAO/dbConnection.php';

class UserDAO{
    private $connection;

    public function __construct(){
        //
    }

    public function insert($user){ //Get user from Controller.php
        //Connecting to database
        $connection = new DBConnection;
        if($connection->connect()>0){
            $n = $user->getName();
            $nn = $user->getNickname();
            $pwd = $user->getPassword();
            $e = $user->getEmail();

            $sql = "INSERT INTO users(name, nickname, pwd, email)
                VALUES ('$n', '$nn', '$pwd', '$e')
                ";

            if(mysqli_query($connection->getConnection(), $sql)){ //Checking the query
                echo "Added successfully! <br/>";
            }else{
                echo "ERROR! Sorry :( " . $sql . "<br/>" . mysqli_error($connection);
            }
        }
        
    }
}
?>