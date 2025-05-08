<?php
declare(strict_types=1);
require "../../includes/db.php";
require "../../includes/admin.php";

$db = db_connect();
$id = $_GET['id'];

// 1. Get appointment from pending_appointment
$stmt = $db->prepare("
    SELECT user_id, service_id, appointment_date, appointment_time
    FROM pending_appointment
    WHERE id = ?
");

$stmt->execute([$id]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if ($appointment) {
    // 2. Insert into upcoming_appointment
    $insert = $db->prepare("
        INSERT INTO upcoming_appointment (
            user_id, service_id, appointment_date, appointment_time
        ) VALUES (?, ?, ?, ?)
    ");

    $result = $insert->execute([
        $appointment['user_id'],
        $appointment['service_id'],
        $appointment['appointment_date'],
        $appointment['appointment_time']
    ]);

    if ($result) {
        // 3. Delete from pending_appointment
        $stmt = $db->prepare("DELETE FROM pending_appointment WHERE id = ?");
        $stmt->execute([$id]);
        echo "<script>alert('Appointment confirmed'); window.location.href='../dashboard.html';</script>";
    } else {
        echo "<script>alert('Failed to confirm appointment'); window.location.href='../dashboard.html';</script>";
    }

} else {
    echo "<script>alert('Pending appointment not found'); window.location.href='../dashboard.html';</script>";
}

$db = null;
?>

