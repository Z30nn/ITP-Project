<?php

include "connect.php"; // Database connection

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['button'])) {
        $location = isset($_POST['location']) ? $_POST['location'] : null;
        $check_in = isset($_POST['check_in']) ? $_POST['check_in'] : null;
        $check_out = isset($_POST['check_out']) ? $_POST['check_out'] : null;
        $room_type = isset($_POST['room_type']) ? $_POST['room_type'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO reservations (location, check_in, check_out, room_type, email, phone) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $location, $check_in, $check_out, $room_type, $email, $phone);

        if ($stmt->execute()) {
            // Prepare email
            try {
                $mail = new PHPMailer(true);

                // SMTP configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'transhotel592024@gmail.com';
                $mail->Password = 'kdpj oxaj ntqo xznx'; 
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Sender and recipient
                $mail->setFrom('transhotel592024@gmail.com', 'Reservation System');
                $mail->addAddress($email); // Send to the user's email address

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'Reservation Confirmation';
                $mail->Body = "Dear user,<br><br>Thank you for your reservation.<br><br><b>Location:</b> $location<br><b>Check-in:</b> $check_in<br><b>Check-out:</b> $check_out<br><b>Room Type:</b> $room_type<br><b>Email:</b> $email<br><b>Phone:</b> $phone<br><br>Best regards,<br>Hotel Management";

                // Send email
                $mail->send();
                echo 'Email sent successfully.';
            } catch (Exception $e) {
                echo "Email sending failed. Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>




<html lang="en">

<head>
  <link rel="stylesheet" href="booking.css">
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
  <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="navbar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/web-speech-api/1.0.0/speechRecognition.min.js"></script>
  <script src="bookingvoicerecog.js"></script>
</head>

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
</div><br>


<div id="booking" class="section">
  <div class="section-center">
    <div class="container">
      <div class="row">
        <div class="booking-form">
          <div class="form-header">
            <h1>Make your reservation</h1>
          </div>
          <form method="POST" id="voice-recog-form">
            <div class="form-group">
              <input class="form-control" onclick="startListeningDestination()" type="text" name="location"
                id="destination-input-field" placeholder="Country, ZIP, city...">

              <span class="form-label">Destination</span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" onclick="startListeningCheckIn()" type="date" name="check_in"
                    id="check-in-input-field" required>
                  <span class="form-label">Check In</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" onclick="startListeningCheckOut()" type="date" name="check_out"
                    id="check-out-input-field" required>
                  <span class="form-label" id="check-out">Check out</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-control" name="room_type" id="rooms-input-field" onclick="startListeningRooms()"
                    required>
                    <option value="" selected hidden>Rooms</option>
                    <option>Superior Terrace</option>
                    <option>Deluxe Terrace</option>
                    <option>Ocean Front Terrace</option>
                    <option>Premium Ocean Front Terrace</option>
                    <option>One Bedroom Suite</option>
                    <option>The TransHotel Suite</option>
                  </select>
                  <span class="select-arrow"></span>
                  <span class="form-label">Rooms</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="email" name="email" placeholder="Enter your Email"
                    id="email-input-field" onclick="startListeningEmail()">
                  <span class="form-label">Email</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="tel" name="phone" placeholder="Enter you Phone"
                    id="phone-input-field" onclick="startListeningPhone()">
                  <span class="form-label">Phone</span>
                </div>
              </div>
            </div>
            <div class="form-btn">
              <button type="submit" name="button" class="submit-btn">Book Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="footer-content">
      <h3 class="h3-footer">Contact Us</h3>
      <p>Email:&nbsp;CJbaklita@gmail.com</p>
      <p>Phone:&nbsp;096859474</p>
      <p>Address:&nbsp;Arlegui St.</p>
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

</html>