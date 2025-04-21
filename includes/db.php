<?php
function db_connect(): PDO
{
    return new PDO("mysql:host=localhost;dbname=appointment-system");
}
