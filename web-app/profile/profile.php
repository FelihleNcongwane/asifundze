<?php
include '../core/check_login.php';
@check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="profile.css">
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body>
<div class="container">
    <div class="profile-info">
        <div id="edit-profile-form" class="dialog-box">
            <h1>User Profile</h1>
            <p>
                <label for="username">Username:</label>
                <input type="text" id="username" value="{{username}}">
            </p>
            <p>
                <label for="bio">Bio:</label>
                <input type="text" id="username" value="{{Bio}}">
            </p>
            <h1>Enrolled Courses</h1>
            <ul>
                <li>Course 1: HTML</li>
                <li>Course 2: CSS</li>
            </ul>
            <p>
                <label for="password">Password:</label>
                <input type="password" id="password">
            </p>
            <p>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" value="{{fullName}}">
            </p>
            <p class="buttons">
                <a href="#" class="button" id="editProfileButton">Edit</a>
                <a href="#/home/" class="button">Cancel</a>
            </p>
        </div>
    </div>
</div>


    <div class="profile">
      <img src="https://via.placeholder.com/460x345" alt="Profile Image" width="460" height="345">
    </div>
  </div>

  <footer>
    <div class="container footer__container">
      <div class="footer__1">
        <a href="index.html" class="footer__logo"><h4>Learn By Doing</h4></a>
        <p>From experiential learning to applying your skills in real-world projects.</p>
      </div>
      <div class="footer__3">
        <h4>Privacy</h4>
        <ul class="privacy">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms and Conditions</a></li>
          <li><a href="#">Refund Policy</a></li>
        </ul>
      </div>
      <div class="footer__4">
        <h4>Contact Us</h4>
        <p>+233 1234 567 894</p>
        <p>asifundze@gmail.com</p>
        <ul class="footer__socials">
          <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
          <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
          <li><a href="#"><i class="uil uil-twitter"></i></a></li>
          <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="footer__copyright">
      <small>Copyright &copy; 2024 asifundze, All rights reserved</small>
    </div>
  </footer>
</body>
</html>
