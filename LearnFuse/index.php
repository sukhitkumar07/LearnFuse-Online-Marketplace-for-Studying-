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
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
</head>

<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

<body>
  
  <header>
    <div class="logo-container">
      <img src="image/fuse2.png" alt="Your Logo">
    </div>
    
    <nav>
      <a href="index.php">HOME</a>
      <a href="contact_us.php">CONTACT</a>
      <a href="about.php">ABOUT</a>
    </nav>
    <?php
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
      echo "
      <div class='user'>
        {$_SESSION['username']} - <a href='logout.php'>LOGOUT</a>
      </div>";
    } else {
      echo "
      <div class='sign-in-up' id='login-register-buttons'>
        <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
        <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
      </div>";
    }
    ?>
  </header>

  <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>

  <?php
  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    echo "<h2 style='text-align:left; margin-top:10px; margin-left:10px'>Welcome to LearnFuse</h2>";
  }
  ?>

  <!-- course section  -->
  <section class="course-section">
    <!-- course section main div  -->
    <div class="course-section-main">
    
      <h2>What would you like to <span>learn?</span></h2>
        
      <!-- course info  -->
      <div class="course-info-1">
        <div class="course-info-1-div">
          <img src="image/img1.jpg" alt="" loading="lazy">
          <h3>Cracking Object Oriented <br> Design Interviews</h3>
          <div></div>
          <div>
            <span>  </span>
            <div><button type="button" onclick="popup('login-popup')">Enroll Course</button></div>
            
          </div>
        </div>
        <div class="course-info-1-div">
          <img src="image/img2.jpg" alt="" loading="lazy">
          <h3>Web Development Master <br> Course @dot Batch</h3>
          <div></div>
          <div>
          <span>  </span>
            <div><button type="button" onclick="popup('login-popup')">Enroll Course</button></div>
          </div>
        </div>
        <div class="course-info-1-div">
          <img src="image/img3.jpg" alt="" loading="lazy">
          <h3>Data Structures & Algorithms <br> BootCamp @Supereme Batch</h3>
          <div></div>
          <div>
          <span>  </span>
            <div><button type="button" onclick="popup('login-popup')">Enroll Course</button></div>
          </div>
        </div>
      </div>

      <!-- underline  -->
      <div class="course-section-underline"></div>

      <h2><b>Upcoming</b> <span><b>Courses</b></span></h2>
        
      <!-- course info 2  -->
      <div class="course-info-1 course-info-2">
        <div class="course-info-1-div">
          <img src="image/img4.jpg" alt="" loading="lazy">
          <h3>Master Course on Recursion <br> and Backtracking</h3>
        </div>
        <div class="course-info-1-div">
          <img src="image/img5.jpg" alt="" loading="lazy">
          <h3>Master Course on Graph <br> Algorithm</h3>
        </div>
      </div>
    </div>

    <footer>
      <p>&copy; 2023 @LearnFuse</p>
    </footer>
  </section>

  <script>
    function popup(popup_name) {
      get_popup = document.getElementById(popup_name);
      if (get_popup.style.display == "flex") {
        get_popup.style.display = "none";
      } else {
        get_popup.style.display = "flex";
      }
    }
  </script>
</body>
</html>

