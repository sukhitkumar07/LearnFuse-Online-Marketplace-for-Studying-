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
  <title>Dashboard</title>
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

  <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
      echo"<h2 style='text-align:left; margin-top:10px; margin-left:10px'> Welcome $_SESSION[full_name] !</h2>";
    }
    
    ?>
  <!-- course section  -->
  <section class="course-section">
    <!-- course section main div  -->
    <div class="course-section-main">
    
        <h2>What would you like to <span>learn?</span></h2>
        
        <!-- course info  -->
        <a href="video1.php">
        <div class="course-info-1">
            <div class="course-info-1-div">
                <img src="image/img1.jpg" alt="" loading="lazy">
                <h3>Cracking Object Oriented <br> Design Interviews</h3>
                <div></div>
                <div>
                    <span></span>
                    <button>JOIN CLASS</button>
                </div>
            </div>
        </a>

            <a href="video2.php">
            <div class="course-info-1-div">
                <img src="image/img2.jpg" alt="" loading="lazy">
                <h3>Web Development Master <br> Course @dot Batch</h3>
                <div></div>
                <div>
                    <span> </span>
                    <button>JOIN CLASS</button>
                </div>
            </div>
            </a>
            <a href="video3.php">
            <div class="course-info-1-div">
                <img src="image/img3.jpg" alt="" loading="lazy">
                <h3>Data Structures & Algorithms <br> BootCamp @Supereme Batch</h3>
                <div></div>
                <div>
                <span></span>
                    <button>JOIN CLASS</button>
                </div>
            </div>
            </a>
        </div>

        <!-- underline  -->
        <div class="course-section-underline"></div>

        <h2><b>Upcoming</b> <span> <b>Courses</b></span></h2>
        
        <!-- course info 2  -->
        <div class="course-info-1 course-info-2">
          <a href="Upcoming.php">
            <div class="course-info-1-div">
                <img src="image/img4.jpg" alt="" loading="lazy">
                <h3>Master Course on Recursion <br> and Backtracking</h3>
            </div>
          </a>

          <a href="Upcoming.php">
            <div class="course-info-1-div">
                <img src="image/img5.jpg" alt="" loading="lazy">
                <h3>Master Course on Graph <br> Algorithm</h3>
            </div>
          </a>
        </div>
    </div>


    <footer>
      <p>&copy; 2023 @LearnFuse</p>
    </footer>

</section>

  

</body>
</html>