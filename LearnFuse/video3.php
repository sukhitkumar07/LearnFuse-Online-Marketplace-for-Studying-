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
  <title>DSA</title>
  <link rel="stylesheet" href="style.css">
<style>
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

  <div class="row">
    <div class="column first-row">
      <!-- Video section -->
      <div class="video-container">
        <video id="videoPlayer" controls autoplay>
          <source src="" type="video/mp4">
          <source src="" type="video/webm">
          <source src="" type="video/3gp">
          <source src="" type="video/ogv">
        </video>
      </div>
    </div>
    <div class="column second-row">
      <!-- course content -->
      <div class="aside-contact">
          <aside><br><br>
              <p><space><b>1. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video7.mp4')">Lecture-1 Arrays</a></b></space></p><br> 
              <p><space><b>2. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video3.mp4')">Lecture-2 Linked Lists</a></b></space></p><br>
              <p><space><b>3. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video6.mp4')">Lecture-3 Stacks</a></b></space></p><br>
              <p><space><b>4. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video5.mp4')">Lecture-4 Queues</a></b></space></p><br>
              <p><space><b>5. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video1.mp4')">Lecture-5 Trees</a></b></space></p><br>
              <p><space><b>6. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video2.mp4')">Lecture-6 Graphs</a></b></space></p><br>
              <p><space><b>7. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video9.mp4')">Lecture-7 Hashing</a></b></space></p><br>
              <p><space><b>8. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video8.mp4')">Lecture-7 Sorting Algorithms</a></b></space></p><br>
              <p><space><b>9. ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video11.mp4')">Lecture-8 Searching Algorithms</a></b></space></p><br>
              <p><space><b>10 ☑️ <a href="javascript:void(0)" onclick="changeVideo('vd/Video10.mp4')">Lecture-10 Dynamic Programming</a></b></space></p><br>
              <p><space><b>12.☑️ <a href="doubt_session.php"> Doubt Session</a></b></space></p><br>
              <p><center><b><a href="certificate3.php">Generate Certificate</a></b></center></p><br><br><br><br><br><br><br>
          </aside>
        </div>
            </div>

            </div>


            <div class="pppp">
              <p>&copy; 2023 @LearnFuse</p>
            </div>


            <script>
                function changeVideo(videoSrc) {
                var videoPlayer = document.getElementById('videoPlayer');
                videoPlayer.src = videoSrc;
                videoPlayer.load();
                }
            </script>
            </body>
            </html>
