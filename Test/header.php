<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edurito</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src='js/device.min.js'></script>
    <style>
    #map {
      height: 400px;
      width: 100%;
    }
    </style>

<body>
<div class="page">
<header>
 <!-- Sidebar (hidden by default) -->
  <div class="toggle-menu-container">
    <nav class="nav">
      <div class="nav_title"></div>
        <a class="sf-menu-toggle fa fa-bars"></a>
          <ul class="sf-menu">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="about.php">Course Catalogue</a>
            </li>
            <li>
              <a href="surprise.php">Surprise Me!</a>
            </li>
            <li>
              <a href="login.php">Get started</a>
            </li>
            <li>
              <a href="signup.php">Sign up</a>
            </li>
            <li>
              <a href="contact.php">Contact Us</a>
            </li>

            <li>
             <a href="javascript:void(0)" onclick="w3_close()">Close</a>
            </li>
          </ul>
          </nav>
        </div>
      </nav>
</header>
