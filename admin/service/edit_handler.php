<?php
declare(strict_types=1);
require "../../includes/db.php";
require "../../includes/admin.php";

$db = db_connect();

$service_id = $_POST['id'];
$service_name = $_POST['name'];
$service_price = $_POST['price'];
$service_tmp = $_FILES['img']['tmp_name'] ?? "";
$service_img = $_FILES['img']['name'] ?? "";

if (service_edit($service_id, $service_name, $service_price, $service_img, $service_tmp)) {
    echo "<script>alert('Service updated'); window.location.href='../dashboard.html';</script>";
}
// TODO: Add else clause

$db = NULL;
