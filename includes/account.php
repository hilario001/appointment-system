<?php
declare(strict_types=1);

function account_auth(string $table, string $email, string $pass): bool
{
    global $db;
    $query = "SELECT * FROM $table WHERE email=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (empty($row) || !password_verify($pass, $row['password'])) {
        $_SESSION['error'] = "Invalid credentials";
        $_SESSION['user_id'] = $row['id'];
        return false;
    }

    return true;
}

function account_new(string $table, string $email, string $pass): bool
{
    global $db;
    $query = "SELECT * FROM $table WHERE email=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

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
