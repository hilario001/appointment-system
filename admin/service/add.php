<?php
declare(strict_types=1);
require "../../includes/db.php";
require "../../includes/admin.php";

$db = db_connect();

$service_name = $_POST['name'];
$service_price = $_POST['price'];
$service_tmp = $_FILES['img']['tmp_name'];
$service_img = $_FILES['img']['name'];

// TODO: Add error handling when getting form inputs
if (service_create($service_name, $service_price, $service_img, $service_tmp)) {
    /* echo "<script>alert('Service created'); window.location.href='../dashboard.html';</script>"; */
    echo "<script>window.location.href='../dashboard.html';</script>";
} else {
}

$db = NULL;
