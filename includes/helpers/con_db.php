<?php
    $host = 'localhost';
    $dbName = 'cse_458';
    $userName = 'root';
    $pwd = '';

    $dbCon = mysqli_connect($host, $userName, $pwd, $dbName);
    @define("BASE", "http://localhost/E-commerce/");
    @define("REGISTER", "http://localhost/E-commerce/includes/dynamic/register.php");
    @define("LOGIN", "http://localhost/E-commerce/includes/dynamic/login.php");
    @define("Add_product", "http://localhost/E-commerce/includes/dynamic/add_product.php");
?>