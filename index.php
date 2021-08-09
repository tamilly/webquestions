<?php
require_once "controller/userController.php";
require_once "controller/productController.php";
$user = new UserController;
$user->add();
$user->listAll();
$product = new ProductController;
$product->add();
$product->listAll();
?>
 