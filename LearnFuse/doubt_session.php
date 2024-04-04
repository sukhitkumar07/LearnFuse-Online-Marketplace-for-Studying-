<?php 
require('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOUBT_SESSION</title>
  <link rel="stylesheet" href="style.css">
</head>

<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

<body>
  <header>
    <div class="logo-container">
      <img src="image/fuse2.png" alt="Your Logo">
    </div>
    
    <nav>
      <a href="dashboard.php">DASHBOARD</a>
      <a href="lab.html" target="_blank">LAB</a>
    </nav>
    
    <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
      echo "
      <div class='user'>
        $_SESSION[username] - <a href='logout.php'> LOGOUT </a>
      </div>
      ";
    }
    ?>
   
  </header>

  
  <div class="zoom-meeting">
   
    <iframe src="https://us05web.zoom.us/j/84180447229?pwd=dUJ6YmQ5MjF0VWRKRzdmVFR4dnZoZz09" width="800" height="600" frameborder="0" allowfullscreen></iframe>
  </div>
</body>

</html>