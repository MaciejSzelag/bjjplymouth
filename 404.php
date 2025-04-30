<?php
    http_response_code(404);                   // MUST be first - sets proper HTTP header
    header('X-Robots-Tag: noindex, nofollow'); // Additional protection for bots

    // Config file loading with security check
    $configPath = isset($homePage) ? 'config/config.php' : '../../config/config.php';
    if (file_exists($configPath)) {
        include $configPath;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow"> <!-- Block indexing -->
    <meta name="description" content="Page not found - BJJ Plymouth Brazilian Jiu-Jitsu training center">
    <title>404 Page Not Found | BJJ Plymouth - Checkmat Plymouth</title>
    <link rel="canonical" href="https://bjjplymouth.co.uk/" /> <!-- Points to homepage -->

    <!-- Structured data for error page -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "404 Page Not Found",
        "description": "Error page for BJJ Plymouth website",
        "url": "https://bjjplymouth.co.uk/404",
        "isPartOf": {
            "@type": "WebSite",
            "name": "BJJ Plymouth",
            "url": "https://bjjplymouth.co.uk/"
        }
    }
    </script>
    <style>
        :root {
            --primary: rgb(52, 52, 52);
            --accent: rgb(241, 151, 96);
            --light: #ecf0f1;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: var(--primary);
            color: var(--light);
            text-align: center;
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
        }

        h1 {
            color: var(--accent);
            font-size: 4rem;
            margin-bottom: 0.5rem;
        }

        .emoji {
            font-size: 3rem;
            margin: 1rem;
        }

        a.button {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 0.8rem 1.5rem;
            margin-top: 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        a.button:hover {
            background: rgb(95, 113, 96);
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2.5rem;
            }

            .emoji {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="emoji">😕</div>
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>We couldn't find the page you're looking for. It might have been moved or deleted.</p>
        <p>Here are some helpful links instead:</p>
        <div>
            <a href="/" class="button">Home Page</a>
            <a href="../../pages/contact/" class="button"> Contact Us</a>
        </div>
    </div>
</body>

</html>
