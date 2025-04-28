<?php
declare(strict_types=1);
require "db.php";

function account_auth(string $table, string $email, string $pass): bool
{
    global $db;
    $query = "SELECT * FROM $table WHERE email=\"$email\"";
    $sth = $db->prepare($query);
    $sth->execute();
    $row = $sth->fetch();

    if (empty($row)) {
        $_SESSION['error'] = "User does not exist";
        return false;
    }

    $pass_verified = password_verify($pass, $row['password']);

    if ($pass_verified) {
        return true;
    } else {
        $_SESSION['error'] = "Incorrect password";
        return false;
    }
}

function account_new(string $table, string $email, string $pass): bool
{
    global $db;
    $query = "SELECT * FROM $table WHERE email=\"$email\"";
    $sth = $db->prepare($query);
    $sth->execute();
    $row = $sth->fetch();

    if ($row) {
        $_SESSION['error'] = "User already exists";
        return false;
    }

    $password_hashed = password_hash($pass, PASSWORD_BCRYPT);
    $query = "INSERT INTO $table (email, password) VALUES (\"$email\", \"$password_hashed\")";
    $sth = $db->prepare($query);
    $sth->execute();

    return true;
}
