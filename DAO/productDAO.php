<?php
require_once 'model/product.php';
require_once 'DAO/dbConnection.php';

class UserDAO{
    private $connection;

    public function __construct(){
        //
    }

    public function insert($product){ //Get user from Controller.php
        //Connecting to database
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            //Prepare and bind
            $stmt = $this->connection->prepare("INSERT INTO products(name, price) VALUES (?,?)");
            $stmt->bind_param("sd", $n, $p);
            
            //Set and execute
            //user ID is auto_increment, so I don't need to add it here
            $n = $product->getName();
            $p = $product->getPrice();
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
            $sql = "SELECT * from products WHERE id = '$id'";
            $result = $this->connection->query($sql);

            if($result->num_rows > 0){
                //Output data of each row
                while($row = $result->fetch_assoc()){
                    echo "ID: " . $row["id"]. "Name: " . $row["name"] . "Price:" . $row["price"] . "<br>";
                }
            }else{
                echo "There's no product with (". $id . ") ID. <br/>";
            }
        }else{
            echo "ERROR to connect to database";
        }
        $this->connection->close();
    }

    public function listAll(){
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            $sql = "SELECT * FROM products";
        }
    }

    public function delete($id){
        //Connecting to database
        $this->connection = DBConnection::connect();
        if($this->connection!=null){
            $sql = "DELETE FROM products WHERE id = '$id'";

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