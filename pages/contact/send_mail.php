<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '../../../vendor/autoload.php'; //  ścieżka do PHPMailer powinna być odpowiednia

$mail = new PHPMailer(true);

try {
    // Ustawienia SMTP (Mailtrap)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Host z gmail
                                    // $mail->Host       = 'smtp.123-reg.co.uk'; // Host z gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'plymouthcheckmat@gmail.com'; // Twoje dane z Mailtrap
    $mail->Password   = 'ylvh flot kyqz enno';        // Twoje dane z Mailtrap
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    $mail->Port = 465;

    $mail->setFrom('plymouthcheckmat@gmail.com', 'Conatct Form'); // Nadawca

    // Dane nadawcy i odbiorcy
    $firstname      = htmlspecialchars(trim($_POST['firstname']));
    $lastname       = htmlspecialchars(trim($_POST['lastname']));
    $email          = htmlspecialchars(trim($_POST['email']));
    $phone          = htmlspecialchars(trim($_POST['phone']));
    $messageContent = htmlspecialchars(trim($_POST['messageContent']));

    // Nadawca i odbiorca
    $mail->setFrom($email, 'Contact Form');
    $mail->addAddress('plymouthcheckmat@gmail.com');   // Do siebie
    $mail->addReplyTo($email, "$firstname $lastname"); // Użytkownik jako reply-to

    // Walidacja podstawowych pól
    if (! empty($firstname) && ! empty($email) && ! empty($messageContent)) {
        // $mail->setFrom($email, "$firstname $lastname"); // Nadawca
        // $mail->addAddress($email);                      // Odbiorca, tutaj możesz podać dowolny e-mail

        // Ustawienie treści wiadomości
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form - message from ' . $firstname . ' ' . $lastname;
        $mail->Body    = '<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #333;
                background-color:rgb(255, 255, 255);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 20px auto;

            }
            .wrapper{
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
                background-color:rgb(248, 248, 248);
                padding: 10px;
                border-radius: 5px;
                }

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
                <p><strong>Message:</strong></p>
                <div class="message">
                    <p>' . nl2br($messageContent) . '</p>
                </div>
            </div>
        </div>
    </body>
    </html>
';
        $mail->AltBody = "Name: $firstname\nSurname: $lastname\nEmail: $email\nPhone: $phone\nMessage:\n$messageContent";

        // Wysłanie wiadomości
        if ($mail->send()) {
            $_SESSION['message'] = 'Your message has been sent!';

            header("Location: thank_you.php");
            exit();
            // echo "Message sent successfully!";
        } else {
            $_SESSION['message'] = 'There was an error sending your message.';
            header("Location: contact_form.php");
            exit();
        }
    } else {
        $_SESSION['message'] = 'All fields are required!';
        header("Location: index.php");
        exit();
    }

} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
