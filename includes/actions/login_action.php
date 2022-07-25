<?php
   require_once("../helpers/con_db.php");
   session_start();
   
   if(isset($_POST['btn_login']) == "Login") {
      // username and password sent from form 
      
      $Email = $_POST['email_field'];
      $password = $_POST['password_field']; 
      
      $sql = "select * from tbl_user where email = '$Email'";
      $executeQuery = mysqli_query($dbCon, $sql);
      $user = mysqli_fetch_object($executeQuery);

      if ($user->password === $password) {
        $_SESSION['user'] = $user;
        header('location: ' . BASE);
      }
      else {
        $_SESSION['loginMsg'] = "Invalid email or password";
        header('location: ' . LOGIN);
      }
   }
?>