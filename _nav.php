<?php
session_start();
// if ($_SESSION['loggedin'] == true) {
//   $_SESSION['id'];

// }

?>
<style>
  .nav-item:hover{
    border-bottom: 2px solid blue;
    font-size: 18px;
  }
  .dropdown-item:hover{
    border-left: 2px solid blue;
  }
  .navbar-brand{
    font-size: 20px;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Mohit Pujari</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
            <li><a class="dropdown-item" href="#">App & Software</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Developer & IT</a></li>
          </ul>
        </li>  
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
          echo '</li> <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          My Acccount
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
          <li class="text-center">' . 'Hello,' . $_SESSION['id'] .'</li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          <li><a class="dropdown-item" href="settings.php">Settings</a></li>
          <li>
          <a class="dropdown-item" href="mail.php">Mail</a></li>
          </ul>';
        }
        else{
          
          echo '<form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <button class="btn btn-outline-primary btn-sm" type="submit"><a href="login.php" class="text-bl"
          style="color: black; text-decoration:none;" data-bs-toggle="tooltip" data-bs-placement="left" title="Login & SignUp">
          Login & SignUp
          </a></button>
          </form>';
        }
        ?>
        </ul>
    </div>
  </div>

  </div>

</nav>
<script src="js/popper.min.js"></script>