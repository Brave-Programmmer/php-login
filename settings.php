<?php
include '_nav.php';
    // session_start();
    $_SESSION['id'];
    // if ( $_SESSION['loggedin'] = false) {
    //   echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //   <strong>Error!</strong> You are already Logged in
    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    // </div>';
    // }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <title>Mohit Pujari - Settings</title>
  </head>
  <body>
    <h1 class="text-primary text-center">Settings</h1>
    <hr/>
    <?php
    echo'<h5>
        Update Your Account
    </h5>';
    echo '<p class="text-primary">Username: ' . $_SESSION['id'] . '<br> ' . 'Password: ' . $_SESSION['pass'] . '<p/>';  
    // $upsql = 'UPDATE `login` SET `ph` = '900009999' WHERE `login`.`sno` = 1';
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>