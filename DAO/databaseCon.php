<?php
    class DatabaseCon{
        private $conn;

        public function __construct(){
            //
        }

        public static function connect(){
            try{
                $this->conn = new PDO("mysql:host=localhost;dbname=dbweb", 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected Sucessfully";
            }catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
        }

        public static function close(){
            $this->conn = null;
        }
    
    }

/*
    class databaseCon{
        public static $instance;

        private function __construct(){

        }

        public static function getInstance(){
            if(!isset(self::$instance)){
                self::$instance = new PDO('mysql:host=localhost;
                dbname=pweb', 'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                self::$instance->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
                PDO::NULL_EMPTY_STRING);
            }

            return self::$instance;
        }

    }*/

?>