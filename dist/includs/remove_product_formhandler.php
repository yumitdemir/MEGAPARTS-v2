<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    require_once "Database.php";
    require_once "Product_Model.php";
    require_once "Product_Controller.php";

    $product_controller = new Product_Controller();
    $product_controller->delete_product($id);

    header("location: /MEGAPARTS-v2/dist/index.php");
    exit();
}
