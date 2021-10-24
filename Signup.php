<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>SignUp - Mohit Pujari</title>
</head>
<?php
  //connection 
  $host = "localhost";
$username = "root";
$password = "";
$database = "mohit_web";
$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
	die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> We failed to connect. We are facing some technical issues. Sorry for the inconvenience caused.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' . mysqli_error($connection));
}
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $ph = $_POST['ph'];
  $id = $_POST['id'];
  $pass = $_POST['pass'];
$existsql = "SELECT *FROM `login` WHERE id = '$id'";
$result1 = mysqli_query($connection, $existsql);
$numexrow = mysqli_num_rows($result1);
// echo var_dump($id);
if ($numexrow > 0) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Username already Exists.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
  $s = "rec";
  $r = "send";
  
  $a = $id . $s;
$b = $id . $r;
// echo $a;
//$sql = "INSERT INTO `login` (`name`, `ph`, `id`, `pass`, `dt`) VALUES ('$name', '$id', '$pass', CURRENT_TIMESTAMP)";
$sql = "INSERT INTO `login` (`name`, `ph`, `id`, `pass`, `dt`) VALUES ('$name', '$ph', '$id', '$pass', current_timestamp())";
$result = mysqli_query($connection, $sql);
$sql1= "CREATE TABLE `mohit_web`.`$a` (`recmessages` VARCHAR(300) NOT NULL , `from` VARCHAR(50) NOT NULL ) ENGINE = InnoDB";
$result1 = mysqli_query($connection, $sql1);
$sql1= "CREATE TABLE `mohit_web`.`$b` ( `sendmessages` VARCHAR(300) NOT NULL , `reci` VARCHAR(50) NOT NULL) ENGINE = InnoDB";
$result1 = mysqli_query($connection, $sql1);
// $sql2 = '
if (!$result) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> We failed to connect. We are facing some technical issues. Sorry for the inconvenience caused.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>'  . mysqli_error($connection);
}
else {
  echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are succesfully Signed Up.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
}
  }
?>
<body>
  <?php
  require '_nav.php';
  echo $_SERVER["REQUEST_METHOD"];
  ?>
  <div class="container my-4">
    <center>
      <h1 class="primary">Welcome To The World Mohit Pujari</h1>
      <h2>Sign Up</h2>
    </center>
    <form action="/mohit/Signup.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input type="number" name="ph" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Login-in Id</label>
        <input type="text" name="id" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/popper.min.js"></script>
</body>
</html>