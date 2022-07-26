<?php include_once('../layouts/header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-sm shadow-lg mt-5 usr_box">

        <?php
        if (@$_SESSION['product_msg'] != "") {
        ?>

            <div class="alert alert-warning" role="alert">
                <?= $_SESSION['product_msg']; ?>

            </div>
        <?php echo $_SESSION['product_msg'] = "";
        } ?>

        <div>
            <h2>Add Product</h2>
            <hr class="mb-3">
        </div>
        <form action="../actions/addproduct_action.php" method="post" enctype="multipart">
            <div class="mb-3">
                <label class="form-label fw-bold">Product Name</label>
                <input type="text" class="form-control" name="product_name">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Product Description</label>
                <textarea style="margin-bottom: 2%;" class="form-control" rows="3" name="product_description"></textarea>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Add" name="add_btn">
            </div>
        </form>
    </div>
</body>

</html>