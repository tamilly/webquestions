<?php
$servername = "localhost";
$username = "server";
$password = "";

//Create connection
$con = new mysqli($servername, $username, $password);

//Check connection
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}

echo "Connected successfully";

?>