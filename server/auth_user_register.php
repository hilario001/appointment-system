<?php
require "../includes/db.php";
require "../includes/account.php";

$response = create(
($response) ? header("Location: ../user_login.php") : header("Location: ../user_register.php");
