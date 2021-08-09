<?php
require_once "DAO/userDAO.php";
require_once "controller/userController.php";
echo "welcome";
$ut = new UserController;
$ut->add();
?>
 