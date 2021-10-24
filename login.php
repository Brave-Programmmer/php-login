<?php
include "_nav.php";
$l = false;
//checking
if ($l == true) {
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> You are already Logged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
header("location: index.php");
}
else{
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong></strong> Welcome
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
$alertsu = false;
//connection
$host = "localhost";
$username = "root";
$password = "";
$database = "mohit_web";
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
	echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> We failed to connect. We are facing some technical issues. Sorry for the inconvenience caused.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $pass = $_POST['pass'];
  $id = $_POST['id'];
  $sql1 = "Select * from login where id='$id' AND pass='$pass'";
  $result = mysqli_query($connection, $sql1);
  $number = mysqli_num_rows($result);
  if ($number == 1) {
    $alertsu = true;
  // session_start();
  $_SESSION['loggedin'] = true;
  $l = true;
  $_SESSION['id'] = $id;
  // $_SESSION['id'] = $id;
  $_SESSION['pass'] = $pass;
  $name = $_SESSION['id'];
  $_SERVER["REQUEST_METHOD"] == "POST";
  // header("location: index.php");
  }
  else{
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Invalid Credential.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Login - Mohit Pujari</title>
</head>
<body>
<?php
  if ($alertsu) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are sucessfully logged in <a href ="index.php">Click Here To Go Home Page.</a>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  header("location: index.php");
  }
  ?>
  
  <div class="container my-4">
    <center>
      <h1 class="primary">Welcome To Mohit's World</h1>
      <h2>
        Login
      </h2>
    </center>
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Login-In Id</label>
        <input type="text" class="form-control" name = "id" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name = "pass" class="form-control" id="exampleInputPassword1">
      </div>
      <!-- <div class="mb-3 form-check">
        <a href="#" class="link-primary">Primary link</a>
      </div> -->
      <button type="submit" class="btn btn-primary">Login In</button>
      <button type="submit" class="btn btn-primary">
        <a href="Signup.php" class="link-light" style="text-decoration: none;">
          Create new Account</button>
        </a>
      </button>
    </form>

  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/popper.min.js"></script>


  
</body>

</html>
