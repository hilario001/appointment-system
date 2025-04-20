<?php
include "auto_include.php";

// Authenticate
$acc = new Account();
$response = $acc->create("user", $_POST['email'], $_POST['password']);

($response) ? header("Location: dashboard.html") : header("Location: index.php");
