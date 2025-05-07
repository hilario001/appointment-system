<script src="../script.js"></script>
<link href="../styles/service.css" type="text/css" rel="stylesheet">

<h2>Services</h2>
<button class="btn-add" onclick="showModal('.modal-add')">Add New</button>
<hr>

<div class="service-container">
<?php
    require "../../includes/db.php";

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
                <a class="btn-edit"
                        href="service/edit.php?id=<?= $row['id'] ?>">
                        Edit
                </a>
                <a class="btn-del"
                   href="service/del.php?id=<?= $row['id'] ?>"
                   onclick="return confirm('Are you sure?')";>
                   Delete
                </a>
            </div>
        </div>
<?php endforeach; ?>
</div>

<div class="modal modal-add">
    <div class="modal-content">
        <div class="container-exit">
            <button onclick="hideModal('.modal-add')">Cancel</button>
        </div>
        <h3>Enter the details of the service</h3>
        <form action="service/add.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Service name" required>
            <input type="number" name="price" placeholder="Price" required>
            <label for="img-file">Image</label>
            <input type="file" id="img-file" name="img" placeholder="Image" required>
            <input type="submit" value="Add">
        </form>
    </div>
</div>
