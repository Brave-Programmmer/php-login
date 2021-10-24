<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mohit Pujari - Logout</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
  <?php
  if($_SESSION['loggedin'] = true){
    $_SESSION['loggedin'] = false;
    $l = false;
  }
  session_start();
  // echo'<h1 class="text-center text-primary">' . $_SESSION['id'] . '</h1>
  // <hr/>';
  session_destroy();
?>
  <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading h3 text-center">You Are Succesfully Logged out</h4>
      <p class="text-center h5">Useful Link.</p>
      <hr>
      <p class="mb-0">Home <a href="index.php">Link.</a></p>
      <p class="mb-0">Login in <a href="Login.php">Link.</a></p>
     
    </div>
  </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>