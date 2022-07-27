<?php include_once('../layouts/header.php');
require_once('../actions/search_action.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-sm shadow-lg usr_box">
        <div>
            <h3>Search Product</h3>
            <hr class="mb-3">
        </div>

        <form action="" method="post" enctype="multipart">
            <input type="search" class="form-control" name="search_box" placeholder="Product Name">
            <input type="submit" class="btn btn-primary" name="search_btn" value="Search">
        </form>

        <?php if (@$numSrch > 0) {
            $i = 0;
            while ($recSrch = mysqli_fetch_object($qrySrch)) {
        ?>
                <div class="card" style="width: 18rem; display: inline-block;">
                    <img src="../../Images/product.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $recSrch->product_name; ?></h5>
                        <p class="description_style"><?php echo $recSrch->product_description; ?></p>
                    </div>
                </div>
        <?php
                $i++;
            }
        } ?>
    </div>
</body>

</html>