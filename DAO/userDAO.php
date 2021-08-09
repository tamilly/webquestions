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
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            //Prepare and bind
            $stmt = $this->connection->prepare("INSERT INTO users(name, nickname, pwd, email) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $n, $nn, $pwd, $e);
            
            //Set and execute
            //user ID is auto_increment, so I don't need to add it here
            $n = $user->getName();
            $nn = $user->getNickname();
            $pwd = $user->getPassword();
            $e = $user->getEmail();
            $stmt->execute();

            echo "Added successfully! <br/>";
            $stmt->close();
            $this->connection->close();
        }else{
            echo "ERROR to connect to database";
        }
    }

    public function searchId($id){
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            $sql = "SELECT * from users WHERE id = '$id'";
            $result = $this->connection->query($sql);

            if($result->num_rows > 0){
                //Output data of each row
                while($row = $result->fetch_assoc()){
                    echo "ID: " . $row["id"]. "Name: " . $row["name"] . "Email:" . $row["email"] . "<br>";
                }
            }else{
                echo "There's no users with (". $id . ") ID. <br/>";
            }
        }else{
            echo "ERROR to connect to database";
        }
        $this->connection->close();
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