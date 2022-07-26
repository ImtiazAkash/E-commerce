<?php include_once('../layouts/header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
    <div class="usr_box shadow-lg">
        <button onclick="window.location.href='./add_product.php'" type="button" class="btn usr_btn btn-outline-info " style="margin-right: 5px;">Add Product</button>
        <button  type="button" class="btn usr_btn btn-outline-info inline-block" style="margin-left: 5px; "><span style="color: green;">Update</span>/<span style="color: red;">Delete</span></button>
    </div>
</body>

</html>