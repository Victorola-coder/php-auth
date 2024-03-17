<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $_SESSION["email"] = $email;

    require_once "../config/Dbh.php";
    require_once "../controllers/User.controllers.php";

    // $dbh = new Dbh();
    // $dbh->connectToBD();
    $signupUser = new User($username, $email, $password);
    $signupUser->signupUser();
}else{
    header("Location: ../index.php");
}