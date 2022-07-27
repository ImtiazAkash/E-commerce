<?php
require_once ('../helpers/con_db.php');
/*DELETE*/
$dltID = $_GET['dltID'];
$sqlDelt = "DELETE FROM tbl_product WHERE product_id='$dltID'";
mysqli_query($dbCon,$sqlDelt);

header('Location: http://localhost/E-commerce/includes/dynamic/showUserProduct.php');
?>