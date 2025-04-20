<?php
require_once "../server/auto_include.php";

// Authenticate
$acc = new Account();

$response = $acc->login("user", $_POST['email'], $_POST['password']);
($response) ? header("Location: dashboard.html") : header("Location: user_login.php");
