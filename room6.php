<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="roomz.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="navbar.js"></script>
</head>

<body>

  <div class="landing-page">
    <header class="sticky-header">
      <div class="container">
        <a href="index.php" class="logo"><img src="assets/transhotel_logo1.png" alt="TransHotel Logo"></a>
        <ul class="links">
          <li> <a href="index.php" style="color: black;">Home</a></li>
          <li> <a href="index.php" style="color: black;">About Us</a></li>
          <li> <a href="roomnav.php" style="color: black;">Room</a></li>
          <li> <a href="facilities.php" style="color: black;">Facilities</a></li>
          <li> <a href="email.php" style="color: black;">Contact</a></li>
          <li> <a href="index.php" style="color: white;">Book Now</a></li>
        </ul>
      </div>
    </header>
  </div>

  <div class="title-container">
    <div class="title">
      <h1>The TransHotel Suite</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <p>- Room Size: 1078 sq. ft.</p>
      <p>- Two Bedrooms with king / double bed</p>
      <p>- 49-inch LED TV</p>
      <p>- Netflix Subscribed TV</p>
      <p>- Shower cubicle & bathtub</p>
      <p>- Complimentary Wi-Fi access</p>
      <p>- Washing & drying unit</p>
      <p>- Free local call</p>
    </div>
    <div class="col">
      <img src="assets/tts1.png">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <img src="assets/tts2.png">
    </div>
    <div class="col">
      <h2>&#8369;9500 / night</h2>
      <h2>Book Now, Pay Later</h2>
      <div class="button-container">
        <a href="booking.php" class="btn">Book Now</a>
      </div>
      <div class="navigation-buttons">
        <a href="room5.php" class="prev-button">&lHar;</a>
        <a href="roomnav.php" class="next-button">&rHar;</a>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="footer-content">
        <h3 class="h3-footer">Contact Us</h3>
        <p>Email:&nbsp;transhotel592024@gmail.com</p>
        <p>Phone:&nbsp;096859474</p>
        <p>Addresss:&nbsp;Arlegui St.</p>
      </div>
      <div class="footer-content">
        <ul class="list">
          <li><a href="index.php"><img src="assets/transhotel_logo1.png"></a></li>
        </ul>
      </div>
      <div class="footer-content">
        <h3 class="h3-footer">Follow Us</h3>
        <ul class="social-icons">
          <li><a href=""><i class="fab fa-facebook"></i></a></li>
          <li><a href=""><i class="fab fa-twitter"></i></a></li>
          <li><a href=""><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="bottom-bar">
      <p>&copy; 2024 &nbsp; TransHotel &nbsp; All rights reserved.</p>
    </div>
  </footer>
</body>

</html>