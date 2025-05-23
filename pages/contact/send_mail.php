<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '../../../config/config_mail.php';
require __DIR__ . '../../../vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    session_start();

    if (
        ! isset($_POST['csrf_token'], $_SESSION['csrf_token']) ||
        $_POST['csrf_token'] !== $_SESSION['csrf_token']
    ) {
        $_SESSION['message'] = 'Invalid CSRF token.';
        header("Location: index.php");
        exit();
    }
    session_regenerate_id(true);    // przed unset()
    unset($_SESSION['csrf_token']); // jednorazowy token
                                    // Dane formularza z filtrowaniem i czyszczeniem
    $firstname      = strip_tags(trim($_POST['firstname']));
    $lastname       = strip_tags(trim($_POST['lastname']));
    $email          = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone          = strip_tags(trim($_POST['phone']));
    $messageContent = strip_tags(trim($_POST['messageContent']));

    // Honeypot - ukryte pole 'website'
    if (! empty($_POST['website'])) {
        $_SESSION['message'] = 'Bot detected.';
        header("Location: index.php");
        exit();
    }

    // Walidacja wymaganych pól
    if (empty($firstname) || empty($email) || empty($messageContent)) {
        $_SESSION['message'] = 'All fields are required!';
        header("Location: index.php");
        exit();
    }

    // Walidacja poprawnego emaila
    if (! filter_var($email, FILTER_VALIDATE_EMAIL) || ! preg_match('/@.+\..+$/', $email)) {
        $_SESSION['message'] = 'Invalid email address!';
        header("Location: index.php");
        exit();
    }

    // Limity długości pól
    if (strlen($firstname) > 100 || strlen($lastname) > 100 || strlen($email) > 255 || strlen($phone) > 30 || strlen($messageContent) > 5000) {
        $_SESSION['message'] = 'Field is too long!';
        header("Location: index.php");
        exit();
    }

    $mail->isSMTP();
    $mail->Host       = 'localhost';
    $mail->SMTPAuth   = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;

    $mail->addCustomHeader('X-Origin-IP: ' . $_SERVER['SERVER_ADDR']);
    $mail->addCustomHeader('X-Sender-Verified: bjjplymouth.co.uk');

    $mail->setFrom(getenv("MAIL_USERNAME"), 'BJJ Plymouth');
    $mail->addAddress("info@bjjplymouth.co.uk", "Checkmat Plymouth - Info");
    $mail->addReplyTo("info@bjjplymouth.co.uk");

    $mail->isHTML(true);
    $mail->Subject = 'Contact Form - message from ' . $firstname . ' ' . $lastname;
    $mail->Body    = '<html>
<head>
<style>
    body { font-family: Arial, sans-serif; color: #333; background-color: #fff; margin: 0; padding: 0; }
    .container { max-width: 600px; margin: 20px auto; }
    .wrapper { background-color: #fff; border: 1px solid #474747; padding: 20px; border-radius: 8px; }
    h1 { color: black; font-size: 24px; margin-bottom: 10px; border-bottom: 2px solid #ccc; }
    p { font-size: 16px; line-height: 1.5; color: #555; }
    .message { border: 1px solid #b6b6b6; background-color: #f8f8f8; padding: 10px; border-radius: 5px; }
</style>
</head>
<body>
<div class="container">
<div class="wrapper">
    <h1>Contact Form Message</h1>
    <p><strong>Name:</strong> ' . $firstname . '</p>
    <p><strong>Surname:</strong> ' . $lastname . '</p>
    <p><strong>Email:</strong> ' . $email . '</p>
    <p><strong>Phone:</strong> ' . $phone . '</p>
    <div class="message">
        <p>' . nl2br($messageContent) . '</p>
    </div>
</div>
</div>
</body>
</html>';

    $mail->AltBody = "Name: $firstname\nSurname: $lastname\nEmail: $email\nPhone: $phone\nMessage:\n$messageContent";

    if ($mail->send()) {
        $_SESSION['message'] = 'Your message has been sent!';
        header("Location: thank_you.php");
        exit();
    } else {
        $_SESSION['message'] = 'There was an error sending your message.';
        header("Location: sending_error.php");
        exit();
    }
} catch (Exception $e) {
    error_log(date('[Y-m-d H:i:s] ') . "Mailer Error: {$mail->ErrorInfo}\n", 3, __DIR__ . '/error_log.txt');
    $_SESSION['message'] = 'There was an unexpected error while sending your message.';
    header("Location: sending_error.php");
    exit();
}
