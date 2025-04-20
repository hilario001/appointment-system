<?php
require_once "../autoload_register.php";

// Authenticate
$acc = new Account();

$response = $acc->login("user", $_POST['email'], $_POST['password']);
($response) ? header("Location: ../pages/user_dashboard.php") : header("Location: ../pages/user_login.php");
