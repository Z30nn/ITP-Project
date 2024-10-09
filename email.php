<?php
include "connect.php";
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="email.css">
  <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
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
  
        <div class="image">
          <img src="asset/design3.jpg" alt=""> 
        </div>
      </div>
    </div>
  </div>
  <div class="contact-container">
    <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
      <div class="contact-left-title">
        <h2>Get in touch</h2>
        <hr>
      </div>
      <input type="hidden" name="access_key" value="18c2b64f-66a4-4c2b-86d2-6beb4665fdde">
      <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
      <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
      <textarea name="message" placeholder="Your Message" class="contact-inputs" required></textarea>
      <button type="submit">Submit<img src="assets/arrow_icon.png" alt=""></button>
    </form>
    <div class="contact-right">
      <img src="assets/mail_image.png" alt="">
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
        <li><a href="https://www.facebook.com/profile.html?id=100009159088565"><i class="fab fa-facebook"></i></a></li>
        <li><a href=""><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://l.messenger.com/l.html?u=https%3A%2F%2Fwww.instagram.com%2Fsijj_23%2F&h=AT2VcBqTY1c7rofB1rEgeSMzedIpswVhZBkOLYDHHLXsT9l66gaYJgc5mRilej6E8fxh4H5v1qt652Hm08f0_bA69Xt5tCro6HxzHZrKoeNy4uBS05q_KmOjexcyH854hLHbNQ"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="bottom-bar">
      <p>&copy; 2024 &nbsp; TransHotel &nbsp; All rights reserved.</p>
    </div>
  </footer>

</body>
</html>