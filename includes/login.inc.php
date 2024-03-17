<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $_SESSION["email"] = $email;

    require_once "../config/Dbh.php";
    require_once "../controllers/User.controllers.php";

    $loginUser = new User($email, $password);
    $loginUser->loginUser();
} else{
    header("Location: ../index.php");
}