<?php
    require_once 'model/user.php';
    require_once 'DAO/userDAO.php';

    class UserController{
        
        private $userdao;

        public function __construct(){
            $this->userdao = new UserDAO;
        }

        public function add(){
            $u = new User("test", "t", "123", "oi@test.com");
            $this->userdao->insert($u);
        }

        public function search(){
            $this->userdao->searchId(1);
        }

        public function delete(){
            $this->userdao->delete(1);
        }

        public function listAll(){
            $user = new User();
            
        }

    }
?>