<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $img_url = $_POST["image"];

    // Error Handling
    require_once "Database.php";
    require_once "Product_Model.php";
    require_once "Product_Controller.php";

    $product_controller = new Product_Controller($name,$description,$price,$img_url );
    $product_controller->add_product();

    header("location: /task8-1/dist/index.php");
    exit();
}
