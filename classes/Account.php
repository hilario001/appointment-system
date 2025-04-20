<?php
require_once "../autoload_register.php";

class Account {
    public object $db;

    function __construct() {
        $this->db = DB::connect();
        session_start();
    }

    public function login(string $table, string $email, string $password): bool {
        $query = "SELECT * FROM $table WHERE email=\"$email\"";
        $result = $this->db->query($query);
        $row = $result->fetch_assoc();

        if (empty($row)) {
            $_SESSION['error'] = "User does not exist";
            return false;
        }

        // Check if password corresponds to the stored hashed password.
        $password_verified = password_verify($password, $row['password']);

        if ($password_verified) {
            return true;
        } else {
            $_SESSION['error'] = "Incorrect password";
            return false;
        }
    }

    public function create(string $table, string $email, string $password): bool {
        $query = "SELECT * FROM $table WHERE email=\"$email\"";
        $result = $this->db->query($query);

        if ($result->num_rows) {
            $_SESSION['error'] = "User already exists";
            return false;
        }

        $password_hashed = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO $table (email, password) VALUES (\"$email\", \"$password_hashed\")";
        $result = $this->db->query($query);

        return true;
    }

    function __destruct() {
        $this->db->close();
        session_write_close();
    }

}
