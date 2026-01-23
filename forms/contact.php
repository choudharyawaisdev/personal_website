<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../phpmailer_phpmailer/src/Exception.php';
require __DIR__ . '/../phpmailer_phpmailer/src/PHPMailer.php';
require __DIR__ . '/../phpmailer_phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!$name || !$email || !$subject || !$message) {
        echo "All fields are required.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Config
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'chawaisdevgmail@gmail.com';
        $mail->Password   = 'vsgbcmrtoloblprj'; // 🔴 App password only
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email
        $mail->setFrom('chawaisdevgmail@gmail.com', 'Website Contact');
        $mail->addAddress('chawaisdev92@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Contact Form: $subject";
        $mail->Body = "
            <h3>New Contact Message</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "OK";

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
