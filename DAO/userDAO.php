<?php

require_once 'model/user.php';
require_once 'DAO/databaseCon.php'
class UserDAO{
    public static $connection;

    private function __construct(){
        //
    }

    public function insert(){
        
    }
}

/*//https://www.devmedia.com.br/usando-pdo-php-data-objects-para-aumentar-a-produtividade/28446
require_once pweb/ . "model/user.php";

class UserDAO{

    public static $instance;

    private function __construct(){

    }

    public static function getInstance(){
        if(!isset(self::$instance))
            self::$instance = new UserDAO();
        
        return self::$instance;
    }

    public function insert(user $user){
        try{
            $sql = "INSERT INTO user (
                name,
                nickname,
                password,
                email)
                VALUES (
                :name,
                :nickname,
                :password,
                :email)";
            
            $p_sql = databaseCon::getInstance()->prepare($sql);

            $p_sql->bindValue(":name", $user->getName());
            $p_sql->bindValue(":nickname", $user->getNickname());
            $p_sql->bindValue(":password", $user->getPassword());
            $p_sql->bindValue(":email", $user->getEmail());

            return $p_sql->execute();
                    
        }catch (Exception $e){
            print "Failed to execute this instruction. Try again later";
        }
    }

    public function update(user $user){
        try{
            $sql = "UPDATE user set
            name = :name,
            nickname = :nickname,
            password = :password,
            email = :email,
            WHERE id = :id";

            $p_sql = databaseCon::getInstance()->prepare($sql);

            $p_sql->bindValue(":name", $user->getName());
            $p_sql->bindValue(":nickname", $user->getNickname());
            $p_sql->bindValue(":password", $user->getPassword());
            $p_sql->bindValue(":email", $user->getEmail());
            $p_sql->bindValue(":id", $user->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Failed to execute this instruction. Try again later";
        }
    }

    public function delete($id) {
        try {
            $sql = "DELETE FROM user WHERE id = :id";
            $p_sql = databaseCon::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Failed to execute this instruction. Try again later";
        }
    }

    public function searchId($id) {
        try {
            $sql = "SELECT * FROM user WHERE id = :id";
            $p_sql = databaseCon::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->popUser($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Failed to execute this instruction. Try again later";
        }
    }
    private function popUser($row) {
        $u = new User;
        $u->setId($row['id']);
        $u->setName($row['name']);
        $u->setNickname($row['nickname']);
        $u->setPassword($row['password']);
        $u->setEmail($row['email']);
        return $u;
    }
    
}*/

?>