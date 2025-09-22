<?php
use Dotenv\Dotenv;

require 'vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Duitku credentials from .env
$merchantCode = $_ENV['DUITKU_MERCHANT']; // e.g. DS1234
$apiKey       = $_ENV['DUITKU_API'];      // Long string from Duitku
$callbackUrl  = $_ENV['DUITKU_CALLBACK_URL'] ?? 'https://ydbsf64q.connect.remote.it/callback.php';
// Order details
$orderId   = 'ppdb-' . time();
$amount    = 15000; // IDR
$signature = md5($merchantCode . $orderId . $amount . $apiKey);

// Build request payload
$params = [
    'merchantCode'    => $merchantCode,
    'paymentAmount'   => (string) $amount,
    'paymentMethod'   => 'NQ',
    'merchantOrderId' => $orderId,
    'productDetails'  => 'PPDB Payment',
    'email'           => 'customer@example.com',
    'phoneNumber'     => '08123456789',
    'callbackUrl'     => $callbackUrl,
    'returnUrl'       => 'https://example.com/thanks.php',
    'signature'       => $signature
];

// Send request to Duitku Sandbox
$ch = curl_init('https://sandbox.duitku.com/webapi/api/merchant/v2/inquiry');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    die('Curl error: ' . curl_error($ch));
}
curl_close($ch);

// Decode API response
$result = json_decode($response, true);

// Display QR code
if (isset($result['qrString']) && !empty($result['qrString'])) {
    $qrImage = 'https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode($result['qrString']);
    $Status = $result['statusMessage'];
    echo "<h3>QRIS:</h3>";
    echo "<h4> Product:{$orderId}";
    echo "<h4> Amount:{$amount}";
    echo "<br>";
    echo "<img src='{$qrImage}' alt='QRIS'>";
    echo "<p>Status: {$Status} (Sandbox)</p>";
} else {
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}
