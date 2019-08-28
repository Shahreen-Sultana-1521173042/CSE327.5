<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];
