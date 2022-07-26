<?php
session_start();
require_once ('../helpers/con_db.php');
if (isset($_POST['update_btn']) == "Update") {
	$product_name = $_POST['product_name'];	
	$product_description = $_POST['product_description'];	
	/*Update into tbl_info*/
	$updtSQL= "UPDATE tbl_product SET product_name='$product_name',product_description='$product_description'";
	$updtQry = @mysqli_query($dbCon,$updtSQL) or die("Error in Table Info Update: ".mysqli_error($dbCon));
	/*Success or Error Message*/
	if($updtQry){
		$_SESSION['update_msg'] = "<h4 style='color:blue'>Data Succefully Updated</h4>";
        
	}else{
		$_SESSION['update_msg'] = "<h4 style='color:red'>Not Updated</h4>";
	}
	header('Location: http://localhost/E-commerce/includes/dynamic/showUserProduct.php');
}
?>