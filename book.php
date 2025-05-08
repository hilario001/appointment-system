<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title>Book an appointment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles/general.css" type="text/css" rel="stylesheet">
    <link href="styles/font.css" type="text/css" rel="stylesheet">
    <link href="styles/book.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="service-container">
<?php
    require "includes/db.php";

    $db = db_connect();
    $stmt = $db->query("SELECT * FROM service");
    foreach ($stmt as $row):
?>
        <div class="service">
            <?php if ($row['image']): ?>
                <img src="../../uploads/<?= $row['image'] ?>">
            <?php endif; ?>
            <div class="service-info">
                <p><?= htmlspecialchars($row['name']) ?></p>
            </div>
            <p class="service-price">$<?= htmlspecialchars($row['price']) ?></p>
            <div class="service-actions">
                <a class="btn-book"
                        href="book_form.php?id=<?= $row['id'] ?>">
                        Book
                </a>
            </div>
        </div>
<?php endforeach; ?>
</div>
<script src="js/script.js"></script>
</body>
</html>

