<?php
require 'vendor/autoload.php';
require 'includes/db.php';

use PayPalCheckoutSdk\Orders\OrdersAuthorizeRequest;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\PayPalHttpClient;

$clientId = 'AaxOxDZm8vvfaFycO6TYaFipv0uhVdmHkm37g2vkTery5YEaJQK72qsjyyF0K3G773_Dp8x9S8oLoJ2w';
$clientSecret = 'ENKMVkiQGhsjaQsY6WAJ_ZpaXirX9y49GxaR-cS-2gl3wgVpADx0CC52CRB9LibPsjGzTj_q3Ow08CSu';

$environment = new SandboxEnvironment($clientId, $clientSecret);
$client = new PayPalHttpClient($environment);

$order_id = $_GET['token'];  // PayPal returns ?token=ORDER_ID

$request = new OrdersAuthorizeRequest($order_id);

try {
    $response = $client->execute($request);
    $auth_id = $response->result->purchase_units[0]->payments->authorizations[0]->id;

    $db = db_connect();
    session_start();
    $service_id = $_SESSION['service_id'];
    $user_id = $_SESSION['user_id'];

    // Save authId for future capture
    $stmt = $db->prepare("
        INSERT INTO paypal_payment (service_id, user_id, auth_id, paypal_order_id)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->execute([$service_id, $user_id, $auth_id, $order_id]);
    echo "<script>
          alert('Payment successful. The payment will be deducted on your account when the admin confirms the appointment request');
          window.location.href='user_dashboard.php';
        </script>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

