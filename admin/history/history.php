<?php
declare(strict_types=1);
require "../../includes/db.php";
require "../../includes/admin.php";

$db = db_connect();
$currentDateTime = date('Y-m-d H:i:s');
$stmt = $db->prepare("
    SELECT * FROM upcoming_appointment 
    WHERE CONCAT(appointment_date, ' ', appointment_time) < ?
");
$stmt->execute([$currentDateTime]);
$pastAppointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// For each expired appointment, move to history
foreach ($pastAppointments as $appointment) {
    $stmt = $db->prepare("
        INSERT INTO past_appointment (
            user_id, service_id, appointment_date, appointment_time
        ) VALUES (?, ?, ?, ?)
    ");

    $stmt->execute([
        $appointment['user_id'],
        $appointment['service_id'],
        $appointment['appointment_date'],
        $appointment['appointment_time']
    ]);

    del($appointment['id'], "upcoming_appointment");
}
?>

<h2>Pending appointments</h2>
<hr>
<div class="review-container">
    <?php
    $stmt = $db->query("
        SELECT 
            p.id,
            u.email AS user_email,
            s.name AS service_name,
            p.appointment_date,
            p.appointment_time
        FROM pending_appointment p
        JOIN user u ON p.user_id = u.id
        JOIN service s ON p.service_id = s.id
    ");

    echo "<table>";
    echo "<tr>
            <th>User Email</th>
            <th>Service</th>
            <th>Date</th>
            <th>Time</th>
        </tr>";

    foreach ($stmt as $row) {
        echo "<tr>";
        echo "<td>{$row['user_email']}</td>";
        echo "<td>{$row['service_name']}</td>";
        echo "<td>{$row['appointment_date']}</td>";
        echo "<td>{$row['appointment_time']}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</div>
<script src="../script.js"></script>
</body>
</html>

<?php
$db = null;
