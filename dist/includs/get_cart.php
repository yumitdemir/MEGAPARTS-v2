<?php
session_start();

if (!isset($_SESSION['cart_session'])) {
    $_SESSION['cart_session'] = [];
}
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $json = json_encode($_SESSION['cart_session']);
    echo $json;
} else {
    echo json_encode(['error' => 'Invalid request']);
}