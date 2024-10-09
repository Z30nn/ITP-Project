<?php
include ('connect.php');




try {
    $mail = new PHPMailer(true);

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'petresq4904@gmail.com';
    $mail->Password = 'heox htft eweh tyty';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    // Sender and recipient
    $mail->setFrom("petresq4904@gmail. com", $name); // Set sender's email address and name $mail->addAddress ($recipient _email);


    // Email content
    $mail->isHTML(true);
    $mail->subject = $POST["subject"];
    $mail->Body = $POST["message"] . "<br><br><b>Sender's Address:</b> $address<br><br> Reply to the user using this email, $sender email";


    // Send email
    $mail->send();
    echo 'Email sent successfully. ';
} catch (Exception $e) {
    echo "Email sending failed. Error: {$mail->ErrorInfo}";
}

?>