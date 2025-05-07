<?php
declare(strict_types=1);
require "../../includes/db.php";
require "../../includes/admin.php";

$db = db_connect();
$id = $_GET['id'];

$query = "SELECT id, name, price, image FROM service WHERE id=?";
$stmt = $db->prepare($query);
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../styles/edit.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <div class="container-exit">
            <button onclick="window.location.href='../dashboard.html'">Cancel</button>
        </div>
        <h3>Update the details of the service</h3>
        <form action="edit_handler.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row['id'] ?>" required>
            <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>
            <input type="number" name="price" value="<?= htmlspecialchars($row['price']) ?>" required>
            <label for="img-file">Image</label>
            <input type="file" id="img-file" name="img" placeholder="Image">
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>

<?php
$db = NULL;
