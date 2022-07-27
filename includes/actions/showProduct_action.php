<?php
    require_once('./includes/layouts/header.php');
    require_once ('./includes/helpers/con_db.php');


    if(isset($_POST['sort_btn'])=="Sort"){
        $sqlShow = "SELECT * FROM tbl_product ORDER BY product_name ASC";
        $qryShow = mysqli_query($dbCon,$sqlShow);
        $numData = mysqli_num_rows($qryShow);
    }
    else {
        $sqlShow = "SELECT * FROM tbl_product";
        $qryShow = mysqli_query($dbCon,$sqlShow);
        $numData = mysqli_num_rows($qryShow);
    }


?>