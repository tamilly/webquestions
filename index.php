<?php
require_once "DAO/userDAO.php";
echo "welcome";
$users = new UserDAO;
$users->insert();
?>
 