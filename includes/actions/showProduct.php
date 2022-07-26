<?php
    require_once ('./includes/helpers/con_db.php');
    $sqlShow = "SELECT * FROM tbl_product";
    $qryShow = mysqli_query($dbCon,$sqlShow);
    $numData = mysqli_num_rows($qryShow);
?>