<?php
    require_once 'model/user.php';
    require_once 'DAO/userDAO.php';

    class UserController{
        
        public function add(){
            $userdao = new UserDAO;
            $u = new User("test2", "t2", "123", "oi2@test.com");
            $userdao->insert($u);
        }

        public function listAll(){
            $user = new User();
            
        }

    }
?>