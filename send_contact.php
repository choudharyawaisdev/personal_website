<?php
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'chawaisdev92@gmail.com'; 
        $mail->Password   = 'vsgbcmrtoloblprj';   // Using your provided App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('chawaisdev92@gmail.com', 'Portfolio Contact');
        $mail->addAddress('chawaisdev92@gmail.com'); // Receiving email

        // Content
        $mail->isHTML(true);
        $mail->Subject = htmlspecialchars($_POST['subject']);

        // Fixed variable names to match the HTML form
        $name    = htmlspecialchars($_POST['name']);
        $email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $mail->Body = "<h3>New Message from Website</h3>
                       <b>Name:</b> $name <br>
                       <b>Email:</b> $email <br><br>
                       <b>Message:</b><br> $message";

        $mail->send();
        
        // Return OK for the JavaScript to catch
        echo "OK"; 
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>