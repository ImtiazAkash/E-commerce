<?php require_once('../layouts/header.php');
require_once('../actions/showUserProduct_action.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>Your Products</title>
</head>

<body>

    <div class="container">

        <?php
        if (@$_SESSION['update_msg'] != "") {
        ?>

            <div class="alert alert-warning" role="alert">
                <?= $_SESSION['update_msg']; ?>

            </div>
        <?php echo $_SESSION['update_msg'] = "";
        } ?>

        <?php if ($numData > 0) {
            $i = 0;
            while ($recShow = mysqli_fetch_object($qryShow)) {

        ?>
                <div class="card" style="width: 18rem; display: inline-block;">
                    <img src="../../Images/johncena.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $recShow->product_name; ?></h5>
                        <p class="description_style"><?php echo $recShow->product_description; ?></p>
                        <a href="./updateProduct.php" class="btn btn-primary">Update</a>
                        <a href="#" class="btn btn-primary">Delete</a>
                    </div>
                </div>
        <?php $i++;
            }
        } ?>
    </div>
</body>

</html>