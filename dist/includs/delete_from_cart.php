<?php
session_start();

if (!isset($_SESSION['cart_session'])) {
    $_SESSION['cart_session'] = [];
}
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw_post_data = file_get_contents("php://input");
    $data = json_decode($raw_post_data, true);

    $targetId = $data['id'];

    foreach ($_SESSION['cart_session'] as $key => $item) {
        if ($item['id'] == $targetId) {
            unset($_SESSION['cart_session'][$key]);
            break;
        }
    }

    $json = json_encode($_SESSION['cart_session']);
    echo $json;

} else {
    echo json_encode(['error' => 'Invalid request']);
}