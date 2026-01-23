<?php include 'layouts/header.php'; ?>
<main class="main">
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Get in touch with us for any inquiries or assistance.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="info-box">
                        <h3>Contact Info</h3>
                        <p>Faislabad Susan Road, Punjab, Pakistan</p>
                        <p>+92 308 5277092</p>
                        <p>chawaisdev92@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form">
                        <form action="contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="loading">Loading...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit" class="btn"
                                        style="background-color: #1387c1; color: #fff; padding: 10px 30px;">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo 'All fields are required.';
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'chawaisdev92@gmail.com';
        $mail->Password = 'vsgbcmrtoloblprj'; // Use Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom($email, $name);
        $mail->addAddress('chawaisdev92@gmail.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;

        $mail->Body = "
        <html>
        <head>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
            .container { background-color: #fff; padding: 20px; border-radius: 10px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
            h2 { color: #1387c1; }
            p { line-height: 1.5; color: #333; }
            .label { font-weight: bold; color: #555; }
            .message-box { margin-top: 15px; padding: 15px; background-color: #f9f9f9; border-left: 4px solid #1387c1; border-radius: 5px; }
        </style>
        </head>
        <body>
            <div class='container'>
                <h2>New Contact Message</h2>
                <p><span class='label'>Name:</span> {$name}</p>
                <p><span class='label'>Email:</span> {$email}</p>
                <p><span class='label'>Subject:</span> {$subject}</p>
                <div class='message-box'>
                    <p>{$message}</p>
                </div>
            </div>
        </body>
        </html>
        ";

        $mail->send();
        echo 'success';

    } catch (Exception $e) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>

<?php include 'layouts/footer.php'; ?>