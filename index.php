<?php
require_once "DAO/dbConnection.php";
echo "welcome";
$connection = new DBConnection;
$connection->connect();
$connection->test();

?>
 