
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABOUT</title>
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




    <div>
      <img src="image/LEARN FUSE1.png" alt="Los Angeles" width="100%" height="421px">
       
      </div>  
      <div style="text-align: center;">
        <h1> LearnFuse : Online Marketplace For Studying</h1>
      </div>
        <div style="margin-left: 5px; margin: right 5px;">
            
            The proposed system for the online marketplace for studying aims to offer a flexible, personalized, and affordable education experience that addresses the limitations of the traditional education system and the challenges faced by the current online marketplace for studying. The proposed system will offer a personalized and adaptive learning experience that caters to the unique needs and preferences of individual learners.
            To ensure course quality, the proposed system will implement a robust quality assurance framework that verifies the quality and credibility of courses and providers before they are listed on the platform.
            The proposed system will also offer affordable pricing options for learners, with some courses available for free and others offered at affordable prices.
            To ensure learner success and retention, the proposed system will offer a range of support services, including tutoring, mentoring, and study groups, to help learners achieve their learning objectives.

        </div>
 
<div style="text-align: center;">
<h2>OUR TEAM MEMBER</h2> 
</div>

<div style="margin-left: 45%; margin-top:3px; margin-bottom:2px">
    <p>SUKHIT KUMAR </p>  
    <p>NIRAJ KUMAR</p>
    <p>ROUSHAN RAJ</p>
    <p>VIKASH KUMAR RAY</p>
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

