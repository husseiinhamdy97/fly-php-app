<?php
header('Content-Type: application/json');

$response = [
  "server_ip" => $_SERVER['SERVER_ADDR'] ?? null,
  "client_ip" => $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['HTTP_CF_CONNECTING_IP']
    ?? $_SERVER['REMOTE_ADDR']
    ?? null,
  "headers" => getallheaders()
];

echo json_encode($response, JSON_PRETTY_PRINT);
