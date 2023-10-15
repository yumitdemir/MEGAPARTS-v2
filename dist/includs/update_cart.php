<?php
session_start();

if (!isset($_SESSION['cart_session'])) {
    $_SESSION['cart_session'] = [];
}
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw_post_data = file_get_contents("php://input");
    $data = json_decode($raw_post_data, true);
    $_SESSION['cart_session'][] = $data;


    $json = json_encode($_SESSION['cart_session']);

    echo $json;
} else {
    // Handle other HTTP methods (e.g., GET) or invalid requests
    echo json_encode(['error' => 'Invalid request']);
}