<?php
// Simple api for adding and rendering session variables.
class Flash {
    function __construct() {
        session_start();
    }

    function render(string $var) {
        if (!isset($_SESSION[$var])) {
            return NULL;
        }

        $tmp = $_SESSION[$var];
        unset($_SESSION[$var]);

        return $tmp;
    }

    function __destruct() {
        session_write_close();
    }
}
