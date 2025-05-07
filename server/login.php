<?php
declare(strict_types=1);
require "../includes/account.php";
require "../includes/db.php";

session_start();
$db = db_connect();

if (account_auth("user", $_POST['email'], $_POST['password']))
    header("Location: ../user_dashboard.php");
else
    header("Location: ../user_login.php");

$db = NULL;
