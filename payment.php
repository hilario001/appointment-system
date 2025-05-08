<?php
require 'vendor/autoload.php';
require 'includes/db.php';

use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

$clientId = 'AaxOxDZm8vvfaFycO6TYaFipv0uhVdmHkm37g2vkTery5YEaJQK72qsjyyF0K3G773_Dp8x9S8oLoJ2w';
$clientSecret = 'ENKMVkiQGhsjaQsY6WAJ_ZpaXirX9y49GxaR-cS-2gl3wgVpADx0CC52CRB9LibPsjGzTj_q3Ow08CSu';
session_start();
$service_id = $_SESSION['service_id'];
$db = db_connect();
$stmt = $db->prepare("SELECT * FROM service WHERE id=?");
$stmt->execute([$service_id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$service_price = number_format($row['price'], 2, '.', '');

$environment = new SandboxEnvironment($clientId, $clientSecret);
$client = new PayPalHttpClient($environment);

$request = new OrdersCreateRequest();
$request->prefer('return=representation');
$request->body = [
    "intent" => "AUTHORIZE",
    "purchase_units" => [[
        "amount" => [
            "currency_code" => "USD",
            "value" => $service_price
        ]
    ]],
    "application_context" => [
        "cancel_url" => "http://localhost:8080/payment_cancel.php",
        "return_url" => "http://localhost:8080/payment_handler.php"
    ]
];

try {
    $response = $client->execute($request);
    foreach ($response->result->links as $link) {
        if ($link->rel === 'approve') {
            header("Location: $link->href");
            exit;
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

