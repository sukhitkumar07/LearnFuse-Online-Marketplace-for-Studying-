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
  <title>Upcoming</title>
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

        <div>

                <h1 style='text-align:center; margin-top:312px; margin-bottom:311px'>Course Will Upcoming Soon !</h1>

        </div>

    <footer>
      <p>&copy; 2023 @LearnFuse</p>
    </footer>



  

</body>
</html>