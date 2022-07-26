<?php
session_start();
include_once('./header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>Register</title>
</head>

<body>0
    <div class="signup-form mt-5 shadow-lg">
        <?php
        if (@$_SESSION['msg'] != "") {
        ?>

            <div class="alert alert-warning" role="alert">
                <?= $_SESSION['msg']; ?>

            </div>
        <?php echo $_SESSION['msg'] = "";
        } ?>
        
        <div>
            <h2>Register</h2>
            <hr class="mb-3">
        </div>
        <form action="../actions/register_action.php" method="post" enctype="multipart">
            <div class="inputbox2">
                <input type="text" placeholder="Enter your Username" name="username" required> <br>
                <input type="email" placeholder="Enter your Email" name="email" required> <br>
                <input type="tel" placeholder="Enter your Contact No" name="contact" required> <br>
                <input type="password" placeholder="Enter your Password" name="password" required> <br>
            </div>
            <div>
                <input type="submit" value="Register" name="btn_reg">
            </div>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Have an Account? <a href="/E-commerce/includes/layouts/login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>