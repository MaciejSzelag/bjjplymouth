<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '../../../config/config_mail.php'; //  ścieżka do pliku konfiguracyjnego powinna być odpowiednia
require __DIR__ . '../../../vendor/autoload.php';    //  ścieżka do PHPMailer powinna być odpowiednia

$mail = new PHPMailer(true);
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
// $mail->SMTPDebug = SMTP::DEBUG_CONNECTION; // Pokazuje komunikację z serwerem
try {
    // Dane formularza
    $firstname      = htmlspecialchars(trim($_POST['firstname']));
    $lastname       = htmlspecialchars(trim($_POST['lastname']));
    $email          = htmlspecialchars(trim($_POST['email']));
    $phone          = htmlspecialchars(trim($_POST['phone']));
    $messageContent = htmlspecialchars(trim($_POST['messageContent']));

    // Walidacja formularza
    if (empty($firstname) || empty($email) || empty($messageContent)) {
        $_SESSION['message'] = 'All fields are required!';
        header("Location: index.php");
        exit();
    }

    $mail->isSMTP();
    $mail->Host       = 'localhost';
    $mail->SMTPAuth   = false; // Jeśli 123reg wymaga auth, zmień na true
    $mail->SMTPSecure = false;
    $mail->Port       = 25;
    // Looking to send emails in production? Check out our Email API/SMTP product!
    // $phpmailer = new PHPMailer();
    // $mail->isSMTP();
    // $mail->Host     = 'sandbox.smtp.mailtrap.io';
    // $mail->SMTPAuth = true;
    // $mail->Port     = 2525;
    // $mail->Username = '7ada30890e2ea0';
    // $mail->Password = '5d7bcf4fcdc795';

    $mail->addCustomHeader('X-Origin-IP: ' . $_SERVER['SERVER_ADDR']);
    $mail->addCustomHeader('X-Sender-Verified: bjjplymouth.co.uk');

    $mail->setFrom(getenv("MAIL_USERNAME"), 'BJJ Plymouth');                 // Adres e-mail nadawcy
    $mail->addAddress("info@bjjplymouth.co.uk", "Checkmat Plymouth - Info"); // Odbiorca
                                                                             // $mail->addAddress("szelag.maciej@gmail.com", "Checkmat Plymouth - Info"); // Odbiorca

    $mail->addReplyTo("info@bjjplymouth.co.uk"); // Adres e-mail do odpowiedzi

    // Ustawienie treści wiadomości
    $mail->isHTML(true);
    $mail->Subject = 'Contact Form - message from ' . $firstname . ' ' . $lastname;
    $mail->Body    = '<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: rgb(255, 255, 255);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;

        }

        .wrapper {
            width: 100%;
            background-color: #fff;
            border: 1px solid rgb(71, 71, 71);
            padding: 20px;
            border-radius: 8px;
        }

        h1 {
            color: black;
            font-size: 24px;
            margin-bottom: 10px;
            border-bottom: 2px solid #ccc;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        .message {
            border: 1px solid rgb(182, 182, 182);
            background-color: rgb(248, 248, 248);
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Contact Form Message</h1>
            <p><strong>Name:</strong>' . $firstname . '

            </p>
            <p><strong>Surname:</strong>
              ' . $lastname . '
            </p>
            <p><strong>Email:</strong>
              ' . $email . '
            </p>
            <p><strong>Phone:</strong>
              ' . $phone . '
            </p>
            <div class="message">
                <p>
                    ' . nl2br($messageContent) . '
                </p>
            </div>
        </div>
    </div>
</body>

</html>';
    // Alternatywna treść w formacie tekstowym
    $mail->AltBody = "Name: $firstname\nSurname: $lastname\nEmail: $email\nPhone: $phone\nMessage:\n$messageContent";

    // Wysłanie wiadomości
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
    echo "Error: {$mail->ErrorInfo}";
}
