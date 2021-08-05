<?php
    class User{
        private $id;
        private $name;
        private $nickname;
        private $email;
        private $password;

        public function __construct($id, $name, $nickname, $email){
            $this->id = $id;
            $this->name = $name;
            $this->nickname = $nickname;
            $this->email = $email;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($new_id){
            $this->id = $new_id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($new_name){
            $this->name = $new_name;
        }

        public function getNickname(){
            return $this->nickname;
        }

        public function setNickname($new_nickname){
            $this->nickname = $new_nickname;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($new_email){
            $this->email = $new_email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($new_password){
            $this->password = $new_password;
        }

    }
?>