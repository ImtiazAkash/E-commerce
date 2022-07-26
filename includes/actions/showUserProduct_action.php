<?php
    require_once ('../helpers/con_db.php');
    $user = $_SESSION['user'];
    $sqlShow = "SELECT * FROM tbl_product WHERE usr_email='$user->email'";
    $qryShow = mysqli_query($dbCon,$sqlShow);
    $numData = mysqli_num_rows($qryShow);


?>