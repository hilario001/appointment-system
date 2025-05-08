<?php
declare(strict_types=1);

function service_create(
    string $name,
    string $price,
    string $filename,
    string $tmp_name): bool
{
    global $db;
    $upload_dir = "../../uploads/";
    $db->query("
        INSERT INTO service (name, price, image)
        VALUES ('$name', $price, '$filename');
    ");

    if ($db && move_uploaded_file($tmp_name, $upload_dir . basename($filename))) {
        return true;
    }
    return false;
}

function del(string $id, string $table): bool
{
    global $db;

    if ($db->query("DELETE FROM $table WHERE id='$id'")) {
        // TODO: Delete also the img of the service in ../uploads
        // https://stackoverflow.com/questions/2371408/how-to-delete-a-file-via-php
        return true;
    }
    return false;
}

function service_edit(
    string $id,
    string $name,
    string $price,
    string $filename,
    string $tmp_name): bool
{
    global $db;
    $upload_dir = "../../uploads/";
    // Get filename of last image
    $query = "SELECT name, image FROM service WHERE id=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Admin keeps the last image
    if (empty($filename) && empty($tmp_name)) {
        $filename = $row['image'];
    } else {
        // Admin replace last image
        // TODO: Delete last image in ../uploads directory
        move_uploaded_file($tmp_name, $upload_dir . basename($filename));
    }

    $stmt = $db->prepare("
        UPDATE service
        SET name = ?, price = ?, image = ?
        WHERE id = ?
    ");
    $row = $stmt->execute([$name, $price, $filename, $id]);

    if (!empty($stmt)) {
        return true;
    }
    return false;
}

use PayPalCheckoutSdk\Payments\AuthorizationsCaptureRequest;
function capture_payment($auth_id) {
    global $client;
    global $db;
    $request = new AuthorizationsCaptureRequest($auth_id);
    $request->body = [];

    try {
        $response = $client->execute($request);
        $stmt = $db->prepare("UPDATE paypal_payment SET status = 'captured' WHERE auth_id = ?");
        $stmt->execute([$auth_id]);
        return $response->result;
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    }
}
