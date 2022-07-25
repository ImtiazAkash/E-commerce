<?php
    $host = 'localhost';
    $dbName = 'cse_458';
    $userName = 'root';
    $pwd = '';

    $dbCon = mysqli_connect($host, $userName, $pwd, $dbName);
    @define("BASE", "http://localhost/E-commerce/");
    @define("REGISTER", "http://localhost/E-commerce/includes/layouts/register.php");
?>