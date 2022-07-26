<?php require_once('./includes/layouts/header.php');
require_once('./includes/actions/showProduct_action.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Home</title>
</head>

<body>

    <form action="" method="post">
        <input class="btn btn-primary" type="submit" value="Sort" name="sort_btn">
    </form>

    <div class="container">

        <?php if ($numData > 0) {
            $i = 0;
            while ($recShow = mysqli_fetch_object($qryShow)) {

        ?>
                <div class="card" style="width: 18rem; display: inline-block;">
                    <img src="./Images/product.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="description_style card-title"><?php echo $recShow->product_name; ?></h5>
                        <p class="description_style"><?php echo $recShow->product_description; ?></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
        <?php $i++;
            }
        } ?>
    </div>
</body>

</html>