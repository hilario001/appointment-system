<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../styles/table.css" type="text/css" rel="stylesheet">
</head>
<body>

<h2>Upcoming appointments</h2>
<hr>
<div class="review-container">
<?php
require "../../includes/db.php";
$db = db_connect();

$currentDateTime = date('Y-m-d H:i:s');

// Delete appointments that are in the past
$stmt = $db->prepare("
    DELETE FROM upcoming_appointment 
    WHERE CONCAT(appointment_date, ' ', appointment_time) < ?
");
$stmt->execute([$currentDateTime]);

// Fetch only upcoming confirmed appointments
$stmt = $db->prepare("
    SELECT
        p.id,
        u.email AS user_email,
        s.name AS service_name,
        p.appointment_date,
        p.appointment_time
    FROM upcoming_appointment p
    JOIN user u ON p.user_id = u.id
    JOIN service s ON p.service_id = s.id
    WHERE CONCAT(p.appointment_date, ' ', p.appointment_time) >= ?
    ORDER BY p.appointment_date, p.appointment_time
");
$stmt->execute([$currentDateTime]);

echo "<table>";
echo "<tr>
        <th>User Email</th>
        <th>Service</th>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>
    </tr>";

foreach ($stmt as $row) {
    echo "<tr>";
    echo "<td>{$row['user_email']}</td>";
    echo "<td>{$row['service_name']}</td>";
    echo "<td>{$row['appointment_date']}</td>";
    echo "<td>{$row['appointment_time']}</td>";
    echo "<td>
            <a href='upcoming/cancel.php?id=" . $row['id'] . "' 
               class='btn-del'
               onclick=\"return confirm('Are you sure?')\">
               Cancel
            </a>
          </td>";
    echo "</tr>";
}

echo "</table>";
?>
</div>
<script src="../script.js"></script>
</body>
</html>

<?php $db = NULL; ?>

