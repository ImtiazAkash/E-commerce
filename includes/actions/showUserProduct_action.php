<?php
    require_once ('../helpers/con_db.php');
    $user = $_SESSION['user'];
    $sqlShow = "SELECT * FROM tbl_product WHERE usr_id='$user->usr_id'";
    $qryShow = mysqli_query($dbCon,$sqlShow);
    $numData = mysqli_num_rows($qryShow);


?>