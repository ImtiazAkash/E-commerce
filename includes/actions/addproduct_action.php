<?php
    require_once('../helpers/con_db.php');
    session_start();

    if(isset($_POST['add_btn']) == "Add") {
        $product_name = mysqli_real_escape_string($dbCon, $_POST['product_name']);
        $product_description = mysqli_real_escape_string($dbCon,$_POST['product_description']);
        $user = $_SESSION['user'];

        $insertData = "'$product_name', '$product_description', '$user->email'";
        $insertSQL = "insert into tbl_product values($insertData)";
        $insertQuery = @mysqli_query($dbCon, $insertSQL) or die("Error in product insertion".mysqli_error($dbCon));

        if($insertQuery) {
            $_SESSION['product_msg'] = "<h4 style='color: green'> Data Successfully Inserted </h4>";
        }
        else {
            $_SESSION['product_msg'] = "<h4 style='color: red'> Not Inserted </h4>";
        }
        header('Location: ' . Add_product);
    }
?>