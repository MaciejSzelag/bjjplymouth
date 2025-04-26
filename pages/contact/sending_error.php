<?php

    // Example variable to display a custom message
    $thankYouMessage = "There was an error sending your message! Please try again later.";

?>

    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(52, 52, 52);
                color: #333;
                text-align: center;
                padding: 50px;
            }
            .thank-you-container {
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                display: inline-block;
            }
            h1 {
                color:rgb(131, 15, 15);
            }
            p {
                font-size: 18px;
            }
            a {
                color:rgb(131, 15, 15);
                text-decoration: none;
                font-weight: bold;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="thank-you-container">
            <h1>Error!</h1>
            <p><?php echo $thankYouMessage; ?></p>
            <p><a href="/">Back to home page</a></p>
        </div>
    </body>
    </html>