<html>

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
            <p><strong>Name:</strong>
                <?php echo $firstname ?>
            </p>
            <p><strong>Surname:</strong>
                <?php echo $lastname ?>
            </p>
            <p><strong>Email:</strong>
                <?php echo $email ?>
            </p>
            <p><strong>Phone:</strong>
                <?php echo $phone ?>
            </p>
            <div class="message">
                <p>
                    <?php echo nl2br($messageContent) ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>