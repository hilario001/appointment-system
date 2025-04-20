<?php
class DB {
    static function connect(): object {
        $servername = "localhost";
        $dbname = "appointment_system";
        $hostname = "root";
        $dbpassword = "";
        return new mysqli($servername, $hostname, $dbpassword, $dbname);
    }
}
