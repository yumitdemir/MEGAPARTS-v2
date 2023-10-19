<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
    <link rel="stylesheet" href="output.css">

</head>
<body >
<div class="flex justify-center flex-col gap-5 items-center  w-screen h-screen">
    <p class="text-3xl text-center">Update Product</p>
    <form class="flex flex-col gap-[10px]" action="includs/update_product_formhandler.php" method="post">
        <input type="number" class=" px-[5px] py-[8px] border  border-nav-primary" placeholder="product-id">
        <input name="name" class=" px-[5px] py-[8px] border  border-nav-primary" type="text" placeholder="Name">
        <textarea name="description" class=" px-[5px] py-[8px] border  border-nav-primary"  cols="30" rows="10" placeholder="Description"></textarea>
        <input name="price" class=" px-[5px] py-[8px] border  border-nav-primary" type="number" placeholder="Price">
        <input name="image" class=" px-[5px] py-[8px] border  border-nav-primary"  type="text" placeholder="Image url">
        <button class="bg-black text-white py-3 hover:bg-opacity-80">Update</button>
    </form>

</div>

</body>
</html>