<?php
declare(strict_types=1);
require "../includes/account.php";
require "../includes/db.php";

$db = db_connect();

if (account_new("user", $_POST['email'], $_POST['password']))
    header("Location: ../user_login.php");
else
    header("Location: ../user_register.php");
