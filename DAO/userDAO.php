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
        $connection = DBConnection::connect();
        if($connection!=null){
            //Getting user data
            //user ID is auto_increment, so I don't need to add it here
            $n = $user->getName();
            $nn = $user->getNickname();
            $pwd = $user->getPassword();
            $e = $user->getEmail();
            //Query
            $sql = "INSERT INTO users(name, nickname, pwd, email)
                VALUES ('$n', '$nn', '$pwd', '$e')
                ";
            //Checking the query
            if($connection->query($sql) === TRUE){ 
                echo "Added successfully! <br/>";
            }else{
                echo "ERROR! Sorry :( " . $sql . "<br/>" . $connection->error;
            }
        }else{
            echo "ERROR to connect to database";
        }
    }

    public function searchId(){
        
    }

    public function delete($user){
        //Connecting to database
        $connection = new DBConnection;
        if($connection->connect()>0){
            //Getting user data
            //user ID is auto_increment, so I don't need to add it here
            $n = $user->getName();
            $nn = $user->getNickname();
            $pwd = $user->getPassword();
            $e = $user->getEmail();
            //Query
            $sql = "INSERT INTO users(name, nickname, pwd, email)
                VALUES ('$n', '$nn', '$pwd', '$e')
                ";
            //Checking the query
            if(mysqli_query($connection->getConnection(), $sql)){ 
                echo "Added successfully! <br/>";
            }else{
                echo "ERROR! Sorry :( " . $sql . "<br/>" . mysqli_error($connection);
            }
        }
    }
}
?>