<?php
$data = json_decode(file_get_contents("php://input"), true);
file_put_contents("log_webhook.txt", print_r($data, true), FILE_APPEND);

if ($data['status'] === 'COMPLETED') {
    // Update status pembayaran di database kamu
    $external_id = $data['external_id'];
    // TODO: ubah status dari "belum bayar" → "sudah bayar"
}
