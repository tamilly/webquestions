<?php
    require_once 'model/user.php';
    require_once 'DAO/userDAO.php';

    class UserController{
        
        public function add(){
            $userdao = new UserDAO;
            $u = new User("test", "t", "123", "oi@test.com");
            $userdao->insert($u);
        }

        public function listAll(){
            $user = new User();
            
        }

    }
?>