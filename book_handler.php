<?php
declare(strict_types=1);
require "includes/db.php";
require "includes/admin.php";

session_start();
$db = db_connect();
$user_id = $_SESSION['user_id'];
$service_id = $_POST['service_id'];
$date = $_POST['date'];
$time = $_POST['time'];

try {
    $stmt = $db->prepare("
        INSERT INTO pending_appointment (user_id, service_id, appointment_date, appointment_time)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->execute([$user_id, $service_id, $date, $time]);
    echo "<script>window.location.href='payment.php';</script>";
} catch (PDOException $e) {
    echo "<script>alert('Failed to book appointment: " . $e->getMessage() . "'); history.back();</script>";
}

$db = NULL;
