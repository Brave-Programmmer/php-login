<?php
include "_nav.php";
// testing stuff
// echo $_SERVER["REQUEST_METHOD"];
//  session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "mohit_web";
$connection = mysqli_connect($host, $username, $password, $database);
 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_SESSION['id'];
        $reci = $_POST['reci'];
        $message = $_POST['message'];
        $a = $reci . "rec";
        $b = $name . "send";
         $messagesql ="INSERT INTO `$a` (`recmessages`, `from`) VALUES ('$message', '$name')";
          $result3 = mysqli_query($connection, $messagesql);
           $messagesql1 ="INSERT INTO `$b` (`sendmessages`, `reci`) VALUES ('$message', '$reci')";
          $result4 = mysqli_query($connection, $messagesql1);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Pujari Engineers India Pvt Ltd | Mail</title> <!-- Compiled and minified CSS -->
 
  <style>
      .tablinks {
        margin: auto;
        width: 20%;
        border: 3px solid green;
        padding: 2px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
        border: 3px solid green;
      }
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    /* .tab button:hover { */
      /* background-color: ; */
    /* } */

    /* Create an active/current tablink class */
    .tab button.active {
      border-radius: 4px;
      border-bottom: 3px solid blue;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        -webkit-animation: fadeEffect 1s;
        animation: fadeEffect 1s;
    }

    /* Fade in tabs */
    @-webkit-keyframes fadeEffect {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
  </style>
</head>
<body>
  <!--tabs-->
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Compose')">Compose</button> <button class="tablinks" onclick="openCity(event, 'Inbox')">Inbox</button> <button class="tablinks" onclick="openCity(event, 'Sent')">Sent</button>
  </div>

  <div id="Compose" class="tabcontent">
    <h3>Compose</h3>
    <div class="text-center">
      <p class="text-primary text-center fs-1">New Mail</p>
    </div>
    <form action="/mohit/mail.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Recipient</label> <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="reci" required="">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">from</label> <input type="text" class="form-control" id="exampleInputEmail1" name="from" required="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label> 
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required=""></textarea>
      </div><button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

    <div id="Inbox" class="tabcontent">
    <!-- <h3>Inbox</h3> -->
    <!-- <h2 class="text-center">Received messages</h2> -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">From</th>
          <th scope="col">Message</th><!-- <th scope="col">Handle</th> -->
        </tr>
      </thead>
      <?php 
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "mohit_web";
            $connection = mysqli_connect($host, $username, $password, $database);
            echo mysqli_error($connection);
            $name = $_SESSION['id'];
            $a = $name . "rec";
            // $b = $name . "send";
            $query = "SELECT * FROM `$a`";
            $result6 = mysqli_query($connection, $query);
            $rows = mysqli_fetch_assoc($result6);
            $sno = 0;
                while($rows = mysqli_fetch_assoc($result6)){
                    $sno = $sno + 1;
                    echo'
                    <tbody>
                    <tr>
                      <th scope="row">'.$sno .'</th>
                      <td>'. $rows['from'] . '</td>
                      <td>'. $rows['recmessages'] .'</td>
                    </tr>
                  ';
                };
             $rows = mysqli_fetch_assoc($result6);
             $sno = 0;
             ?>
    </table>
    </div>
    <div id="Sent" class="tabcontent">
      <h3>Sent</h3>
      <h2 class="text-center">Send messages</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Recipient</th>
            <th scope="col">Message</th><!-- <th scope="col">Handle</th> -->
          </tr>
        </thead><?php 
                        // session_start();
                $host = "localhost";
                $username = "root";
                $password = "";
                $database = "mohit_web";
                $connection = mysqli_connect($host, $username, $password, $database);
                echo mysqli_error($connection);
                $name = $_SESSION['id'];
                $b = $name ."send";
                $query1 = "SELECT * FROM `$b`";
                $result7 = mysqli_query($connection, $query1);
                    $rows1 = mysqli_fetch_assoc($result7);
                    while($rows1 = mysqli_fetch_assoc($result7)){
                        $sno = $sno + 1;
                        echo'
                        <tbody>
                        <tr>
                          <th scope="row">'.$sno .'</th>
                          <td>'. $rows1['reci'] . '</td>
                          <td>'. $rows1['sendmessages'] .'</td>
                        </tr>
                      
                      ';
                    };
                 $rows = mysqli_fetch_assoc($result6);
                 $sno = 0; 
                 ?>
      </table>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script> 
    <script src="js/popper.min.js"></script> 
    <script>


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
  </div>
</body>
</html>