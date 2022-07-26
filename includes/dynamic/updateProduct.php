<?php include_once('../layouts/header.php');

require_once('../helpers/con_db.php');
$user = $_SESSION['user'];
$sqlUpdtShow = "SELECT * FROM tbl_product WHERE usr_email='$user->email'";
$qryUpdtShow = mysqli_query($dbCon,$sqlUpdtShow);
$recUpdtShow = mysqli_fetch_object($qryUpdtShow);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container-sm mt-5 usr_box">
    <div>
            <h2>Add Product</h2>
            <hr class="mb-3">
        </div>
        <form action="../actions/updateProduct_action.php" method="post" enctype="multipart">
            <div class="mb-3">
                <label class="form-label fw-bold">Product Name</label>
                <input type="text" class="form-control" value="<?php echo $recUpdtShow->product_name ?>" name="product_name">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Product Description</label>
                <textarea style="margin-bottom: 2%;" class="form-control" rows="3" name="product_description"><?php echo $recUpdtShow->product_description ?></textarea>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Update" name="update_btn">
            </div>
        </form>
    </div>
</body>
</html>