<?php

include_once('../helpers/con_db.php');

if(isset($_POST['search_btn'])=="Search"){
	$srch = $_POST['search_box'];
	$sqlSrch = "SELECT * FROM tbl_product WHERE product_name LIKE '%$srch%'";
	$qrySrch = mysqli_query($dbCon,$sqlSrch);
	$numSrch = mysqli_num_rows($qrySrch);
	
}
?>