<?php
if (isset($_GET['productId'])) {
    $productId = $_GET['productId'];
    require_once "includs/Database.php";
    require_once "includs/Product_Model.php";
    require_once "includs/Product_Controller.php";
    $product_controller = new Product_Controller();
    $result = $product_controller->get_product_by_id($productId);
    $productDetails = $result->fetchAll(PDO::FETCH_ASSOC);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
<div class="w-full text-3xl h-screen justify-center items-center flex flex-col">
    <p>Name:
    <?php
    echo $productDetails[0]["name"];
    ?>
    </p>
    <p>Description:
        <?php
        echo $productDetails[0]["description"];
        ?></p>
    <p>Price:
        <?php
        echo $productDetails[0]["price"];
        ?>
        lev
    </p>
    <img src="../assets/item-card/item-1.png" alt="">
</div>



</body>
</html>