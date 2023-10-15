<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    require_once "Database.php";
    require_once "Product_Model.php";
    require_once "Product_Controller.php";

    $product_controller = new Product_Controller();
    $result = $product_controller->get_products(4);

    header("Content-Type: application/json");

    echo json_encode($result);
}