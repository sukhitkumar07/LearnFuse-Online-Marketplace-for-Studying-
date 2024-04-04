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
  <title>CERTIFICATE</title>
  <link rel="stylesheet" href="certi.css">
</head>

<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

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

<body>
  
        <div class="rrrr">
		
                <h1 id="vvvv"><b>Certificate of Completion</b></h1> 
                <p id="nnnn">This certificate is awarded to </p>
                <h2 id="ssss"><?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
      echo" $_SESSION[full_name]</h2>";
    }
    ?></h2>
                <p id="nnnn">for successfully completing the Web Development course</p>
                <p id="nnnn"><i>on</i></p>
                <h3 id="date"></h3>
	    </div>


            <script>

                const date = new Date().toLocaleDateString();
                document.getElementById("date").textContent = date;
            </script>


    <footer>
      <p>&copy; 2023 @LearnFuse</p>
    </footer>



  

</body>
</html>