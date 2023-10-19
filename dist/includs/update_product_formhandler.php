<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $img_url = $_POST["image"];

    // Error Handling
    require_once "Database.php";
    require_once "Product_Model.php";
    require_once "Product_Controller.php";

    $product_controller = new Product_Controller();
    $product_controller->update_product($name,$description,$price,$img_url,$id);

    header("location: /MEGAPARTS-v2/dist/index.php");
    exit();
}
