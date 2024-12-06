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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
<?php
$title;if (isset($title)) {
    echo $title;
} else {
    echo "BjjPlymouth - Checkmat Plymouth";
}
?></title>
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
</head>

<body>
