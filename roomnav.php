<?php
include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="roomnav.css">
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
            <h1>Rooms</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <img src="assets/superior.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">SUPERIOR TERRACE</a>
                    </h5>
                    <p class="card-text">
                        The Superior Terrace at the TransHotel is meticulously crafted to fulfill every traveler's
                        desire, providing a perfect blend of comfort and luxury. With its private terrace offering
                        stunning tropical vistas, it's the ultimate retreat for those seeking an exceptional travel
                        experience.
                    </p>
                    <div class="button-container">
                        <a href="room1.php" class="btn">See Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="assets/deluxe1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">DELUXE TERRACE</a>
                    </h5>
                    <p class="card-text">
                        The Deluxe Terrace rooms at the TransHotel boast breathtaking views from their private terraces,
                        enhancing the hotel experience. Designed with discerning travelers in mind, these rooms are
                        renowned for providing unparalleled relaxation to guests seeking an immersive exploration.
                    </p>
                    <div class="button-container">
                        <a href="room2.php" class="btn">See Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="assets/oft1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">OCEAN FRONT TERRACE</a>
                    </h5>
                    <p class="card-text">
                        Indulge in a serene escape where the beauty of the ocean seamlessly merges with contemporary
                        luxury, creating an unforgettable experience at The TransHotel.
                    </p>
                    <div class="button-container">
                        <a href="room3.php" class="btn">See Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <img src="assets/pofr1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">PREMIUM OCEAN FRONT ROOM</a>
                    </h5>
                    <p class="card-text">
                        Experience the epitome of luxury and serenity in your opulent Premium Ocean Front Room at The
                        TransHotel, where you can immerse yourself in breathtaking vistas extending to the distant
                        horizon. Unwind in unparalleled comfort and style, surrounded by the soothing ambiance of the
                        ocean.
                    </p>
                    <div class="button-container">
                        <a href="room4.php" class="btn">See Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="assets/obs1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">ONE BEDROOM SUITE</a>
                    </h5>
                    <p class="card-text">
                        Taking cues from the dynamic lifestyle of contemporary travelers, the One Bedroom Suite presents
                        a chic foyer adorned with distinctive artwork and modern furnishings. Abundant relaxation space
                        is provided through its open-plan layout, fostering a sense of airiness and inviting natural
                        light indoors.
                    </p>
                    <div class="button-container">
                        <a href="room5.php" class="btn">See Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="assets/tts1.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">THE TRANSHOTEL SUITE</a>
                    </h5>
                    <p class="card-text">
                        Step into a realm of unparalleled indulgence where every detail is meticulously crafted to
                        exceed your expectations. From lavish amenities to impeccable service, The TransHotel Suite
                        offers a truly immersive and unforgettable journey into opulence and refinement.
                    </p>
                    <div class="button-container">
                        <a href="room6.php" class="btn">See Details</a>
                    </div>
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