<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACT</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Fieldset */
fieldset {
  border: 1px solid #ccc;
  padding: 20px;
  margin-bottom: 20px;
}

legend {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Form Components */
label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
  border-color: #ff0000;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  border: none;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
}

/* Optional: Adjust the styles based on your design preferences */
.container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
}

.bg-light {
  background-color: #f8f9fa;
}

/* Additional CSS classes for form validation styles */
.needs-validation input:invalid,
.needs-validation textarea:invalid {
  border-color: #dc3545;
}

.needs-validation input:valid,
.needs-validation textarea:valid {
  border-color: #28a745;
}

.pppp {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #b1cff5;
  padding: 10px;
  text-align: center;
  font-size: 14px;
}

  </style>
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

  <div class="container">
    <fieldset>
      <legend></legend>
      <form name="frmContact" class="needs-validation" method="post" action="contact.php">
        <div class="form-group">
          <label for="txtName">Your Name:</label>
          <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" value="" required>
        </div>
       
        <div class="form-group">
          <label for="txtEmail">Your Email:</label>
          <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" value="" required>
        </div>
        <div class="form-group">
          <label for="txtPhone">Your Phone:</label>
          <input type="text" class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="" required>
        </div>
        <div class="form-group">
          <label for="txtMessage">Message:</label>
          <textarea name="txtMessage" id="txtMessage" class="form-control" placeholder="Message" rows="4" cols="40" required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="Submit" id="Submit" value="Submit" class="btn btn-primary btn-lg btn-block">
        </div>
      </form>
    </fieldset>
  </div>

  <div class="pppp">
  <p>&copy; 2023 @LearnFuse</p>
  </div>
  

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
