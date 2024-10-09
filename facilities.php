<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="facilities.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
    <script src="navigationvoicerecog.js"></script>
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
          <li> <a href="booking.php" style="color: white;">Book Now</a></li>
        </ul>
      </div>
    </header>
  </div>

  <div class="title-container">
    <div class="title">
        <h1>Facilities</h1>
    </div>
</div>

    <div class="row">
        <div class="col">
            <h2>Swimming Pool</h2>
            <p><br>Floating in the most spectacular rooftop swimming pool in Hong Kong, 
                you shall gaze down on the glittering sky and scenic ocean view altogether at The Pier Hotel. 
                Imagine yourself laying on the stylish daybeds overlooking the magnificent sunset, you are basking in the sky, 
                the beach and the pool.</p>
            <p><br>Opening Hours:<br>MON-FRI: 8:00am - 9:00pm<br>SAT-SUN: 8:00am - 10:00pm</p>
        </div>
        <div class="col">
            <img src="assets/swimmingp.jpg">
        </div>
        </div>
    
        <div class="row">
            <div class="col">
                <img src="assets/fitnessc.png">
            </div>
            <div class="col">
              <h2>Fitness Club</h2>
              <p><br>Immerse yourself in VIP privileges with exclusive entry to our fitness club, 
                a full range of technologically advanced gymnastic equipment lead our guests to turn each workout into an adventure.</p>
                <p><br>Opening Hours: 7am to 10pm</p>
            </div>
            </div>

            <div class="row">
                <div class="col">
                    <h2>Rooftop Garden</h2>
                    <p><br>Located at top floor of The TransHotel with sweeping views of the ocean, 
                        you can escape away from the hustle and bustle with your friends and relatives.</p>
                </div>
                <div class="col">
                    <img src="assets/rooftopg.jpg">
                </div>
                </div>
            
                <div class="row">
                    <div class="col">
                        <img src="assets/carparking.jpg">
                    </div>
                    <div class="col">
                      <h2>Car Parking</h2>
                      <p><br>We have over 40 covered parking spaces to meet your needs but subject to its avaliability. 
                        Charging station is avaliable for eco-friendly electrical cars too.</p>
                    </div>
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
