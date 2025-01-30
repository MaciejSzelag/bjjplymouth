<?php
$homePage;
if (isset($homePage)) {
    include 'config/config.php'; // Relatywna ścieżka do pliku konfiguracyjnego
} else {
    include '../../config/config.php'; // Relatywna ścieżka do pliku konfiguracyjnego
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php echo $metaDescription ?? 'Discover BJJ Plymouth, your premier destination for Brazilian Jiu-Jitsu training. Learn self-defense, build strength, and join a supportive community. Beginners and advanced practitioners welcome!'; ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?? 'Brazilian Jiu-Jitsu Plymouth, BJJ Plymouth, Martial Arts Plymouth, Self-Defense Plymouth, Brazilian Jiu-Jitsu classes, BJJ training Plymouth, Martial arts training, Plymouth Jiu-Jitsu gym, BJJ for beginners, Advanced BJJ techniques'; ?>">
    <meta name="author" content="Maciej Szelag, https://maciejszelag.co.uk">
    <title><?php echo $title ?? 'BjjPlymouth - Checkmat Plymouth'; ?></title>
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline';"> -->
    <meta name="theme-color" content="#343434">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_GB">
    <meta property="og:locale:alternate" content="pl_PL">
    <meta property="og:url" content="https://bjjplymouth.co.uk">
    <!-- <meta property="og:image" content="https://.../images/Ian-Ricky-Amy-checkmat-plymouth-1.jpg"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo homePageBaseUrl(""); ?>images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo homePageBaseUrl(""); ?>images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo homePageBaseUrl(""); ?>images/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="<?php $cssPath;if (isset($cssPath)) {
    echo "css/style.min.css";
} else {
    echo "../../css/style.min.css";
}
?>">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SportsClub",
      "name": "BJJ Plymouth",
      "url": "https://www.bjjplymouth.co.uk",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "68 Faraday Rd, Cattedown",
        "addressLocality": "Plymouth",
        "postalCode": "PL4 0ST"",
        "addressCountry": "GB"
      }
    }
    </script>
</head>

<body>
