<?php
declare(strict_types=1);
require "../../includes/db.php";
require "../../includes/admin.php";

$db = db_connect();
// No proper error handling yet when getting GET session variables;
// An error will occur if the function's argument is not a number.
if (service_del($_GET['id'])) {
    echo "<script>alert('Service deleted'); window.location.href='../dashboard.html';</script>";
}

$db = NULL;
