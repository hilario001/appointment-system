<?php
declare(strict_types=1);
require "includes/db.php";
require "includes/admin.php";

$db = db_connect();
session_start();
$id = $_GET['id'];

$query = "SELECT * FROM service WHERE id=?";
$stmt = $db->prepare($query);
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['service_id'] = $id;
?>

<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles/book_form.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <div class="container-exit">
            <button onclick="window.location.href='user_dashboard.html'">Cancel</button>
        </div>
        <h3>Select date and time of the appointment</h3>
        <form action="book_handler.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="service_id" value="<?= $row['id'] ?>" required>
            <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>" required>
            <input type="date" name="date" required>
            <label for="time">Time</label>
            <input type="time" name="time" required>
            <input type="submit" value="Book">
        </form>
    </div>
</body>
</html>

<?php
$db = NULL;
