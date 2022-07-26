<?php 
    session_start();
    require_once("../helpers/con_db.php");
    if(isset($_POST['btn_reg']) == "Register") {
        $Name = $_POST['username'];
        $Email = $_POST['email'];
        $Contact = $_POST['contact'];
        $Password = $_POST['password'];

        // data insertion
        $insertData = "'$Name', '$Email', '$Contact', '$Password'";
        $insertSQL = "insert into tbl_user values($insertData)";
        $insertQuery = @mysqli_query($dbCon, $insertSQL) or die("Error in table info insertion".mysqli_error($dbCon));

        if($insertQuery) {
            $_SESSION['msg'] = "<h4 style='color: green'> Data Successfully Inserted </h4>";
        }
        else {
            $_SESSION['msg'] = "<h4 style='color: red'> Not Inserted </h4>";
        }
        header('Location: ' . REGISTER);
    }
