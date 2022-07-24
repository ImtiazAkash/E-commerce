<?php include_once('./header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>Login</title>
</head>

<body>
    <div class="signup-form mt-5 shadow-lg">
        <div>
            <h2>Login</h2>
            <hr class="mb-3">
        </div>
        <form>
            <div class="inputbox">
                <input style="margin-bottom: 2%;" type="email" placeholder="Email" name="email_field" required> <br>
                <input style="margin-bottom: 2%" type="password" placeholder="Password" name="password_field" required>
            </div>
            <div>
                <input type="submit" value="Login" name="btn_login">
            </div>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="/E-commerce/includes/layouts/register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>