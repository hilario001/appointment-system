<?php
declare(strict_types=1);
require "../../includes/db.php";
require "../../includes/admin.php";

$db = db_connect();
// No proper error handling yet when getting GET session variables;
// An error will occur if the function's argument is not a number.
if (del($_GET['id'], "pending_appointment")) {
    echo "<script>alert('Appointment deleted'); window.location.href='../dashboard.html';</script>";
}

$db = NULL;
