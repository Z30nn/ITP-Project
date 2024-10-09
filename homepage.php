<?php
include "connect.php";
?>

<div class="landing-page">

  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medad</title>
    
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="navbar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
  <script src="navigationvoicerecog.js"></script>
  <style>
    .logo img {
      padding-top: 20px;
      width: 110px; 
      height: auto; 
    }
  </style>
  
  <div class="landing-page">
    <header class="sticky-header">
      <div class="container">
        <a href="homepage.php" class="logo"><img src="assets/transhotel_logo1.png" alt="TransHotel Logo"></a>
        <ul class="links">
          <li> <a href="homepage.php" style="color: black;">Home</a></li>
          <li> <a href="#about" style="color: black;">About Us</a></li>
          <li> <a href="roomnav.php" style="color: black;">Room</a></li>
          <li> <a href="facilities.php" style="color: black;">Facilities</a></li>
          <li> <a href="email.php" style="color: black;">Contact</a></li>
          <li> <a href="booking.php" style="color: white;">Book Now</a></li>
        </ul>
      </div>
    </header>
  </div>
  
  
  <div class="content">
    <div class="clickbutton">
      <div class="container">
        <div class="info">
          <h1>TransHotel</h1>
          <p>“When you get into a hotel room, you lock the door, and you know there is a secrecy, there is a luxury, there is fantasy.”</p>
          <button><a href="roomnav.php" style="color: white;">Click Here</a></button>
        </div>
        <div class="image">
          <img src="assets/hotel2.jpg" alt=""> 
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="assets/hotel1.jpg" alt="" class="d-block" style="width:100%" height="600">
      </div>
      <div class="carousel-item">
      <img src="assets/homepage.jpg" alt="" class="d-block" style="width:100%" height="600">
      </div>
      <div class="carousel-item">
      <img src="assets/hotel3.jpg" alt="" class="d-block" style="width:100%" height="600">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
 <br><br>

  <section id="about" class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-dark">About Our Hotel</h2>
          <p class="text-muted mb-4">
            The TransHotel group has a unique identity among the world’s leading hotels. Established in 1928, we now operate prestigious luxury properties in twelve major cities. These include the flagship in Hong Kong, plus Shanghai, Beijing, Tokyo, New York, Chicago, Beverly Hills, London, Paris, Istanbul, Bangkok and Manila.</p>
          <p class="text-muted mb-4">
            The TransHotel is a living legend, the name synonymous with luxurious comfort and impeccable service.</p>
          <p class="text-muted mb-4">
            We set our sights high and our standards higher, aiming always to delight our customers, and in many cases we are now serving the third generation of our loyal guests.</p>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="footer-content">
        <h3 class="h3-footer">Contact Us</h3>
        <p>Email:&nbsp;CJbaklita@gmail.com</p>
        <p>Phone:&nbsp;096859474</p>
        <p>Addresss:&nbsp;Arlegui St.</p>
      </div>
      <div class="footer-content">
        <ul class="list">
          <li><a href="homepage.php"><img src="assets/transhotel_logo1.png"></a></li>
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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 1000
    });
  });
</script>

<script>
  window.addEventListener('scroll', function() {
    var header = document.querySelector('.sticky-header');
    header.classList.toggle('scrolled', window.scrollY > 0);
  });
</script>

<script>
  document.querySelector('a[href="#about"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#about').scrollIntoView({ behavior: 'smooth' });
  });
</script>
  </body>