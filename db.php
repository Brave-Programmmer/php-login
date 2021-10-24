<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mohit_web";
$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
	die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> We failed to connect. We are facing some technical issues. Sorry for the inconvenience caused.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
}
?>