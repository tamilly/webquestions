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

    public function search($search){
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            $sql = "SELECT * from users WHERE id = '$search%' or name like '$search%'";
            $result = $this->connection->query($sql);

            if($result->num_rows > 0){
                //Output data of each row
                while($row = $result->fetch_assoc()){
                    echo "ID: " . $row["id"]. "Name: " . $row["name"] . "Nickname: " . $row["nickname"] . "Email:" . $row["email"] . "<br>";
                }
            }else{
                echo "This user wasn't find in database. <br/>";
            }
        }else{
            echo "ERROR to connect to database";
        }
        $this->connection->close();
    }

    public function listAll(){
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            $sql = "SELECT * FROM users";
            $result = $this->connection->query($sql);

            if($result->num_rows > 0){
                //Output data of each row
                while($row = $result->fetch_assoc()){
                    echo "ID: " . $row["id"]. "Name: " . $row["name"] . "Nickname:" . $row["nickname"] . "Email: " . $row["email"] . "<br>";
                }
            }else{
                echo "There's no products. <br/>";
            }
        }else{
            echo "ERROR to connect to database";
        }
        $this->connection->close();
    }

    public function delete($id){
        //Connecting to database
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            $sql = "DELETE FROM users WHERE id = '$id'";

            if($this->connection->query($sql) === TRUE){
                echo "Deleted successfully";
            }else{
                echo "ERROR deleting record " . $connection->error;
            }
        }else{
            echo "ERROR to connect to database";
        }
        $this->connection->close();
    }

}
?>