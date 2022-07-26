<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <title>E-commerce</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">E-commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/E-commerce">Home</a>
          <?php if (@$_SESSION['user'] == "") { ?>
            <div>
              <a class="nav-link" href="/E-commerce/includes/dynamic/login.php">Login</a>
            </div>
          <?php } ?>
          <?php if (@$_SESSION['user'] != "") { ?>
            <div>
              <a class="nav-link" href="/E-commerce/includes/dynamic/user_options.php">More</a>
            </div>
          <?php } ?>
          <a class="nav-link" href="/E-commerce/includes/dynamic/about.php">About Us</a>
        </div>
      </div>
    </div>

    <?php
    if (@$_SESSION['user']) {
    ?>
      <div class="d-flex" style="margin-left: auto;">
        <span>[ <a href="?page=usr"> <?php echo $_SESSION['user']->user_name; ?></a>]</span>
        <a href="/E-commerce/includes/actions/logout_action.php" value="Logout" name="btn_logout">Logout</a>
      </div>
    <?php
    }
    ?>
  </nav>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>