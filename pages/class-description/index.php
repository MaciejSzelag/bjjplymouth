<?php $title = "Class Description | bjjplymouth";include "../../includes/head.php"?>

<?php
$active = "classes";
include "../../includes/nav.php"?>

<?php

$category = $_GET['category'] ?? '';

$data = [
    'gi' => [
        'title' => 'Gi Class',
        'headerImg' => 'bjj-classes/Gi.jpg',
        'headerImgDescription' => 'Gi Class - Coach is showing a technique',
        'description' => 'Gi description',
    ],
    'nogi' => [
        'title' => 'NoGi Class',
        'headerImg' => 'bjj-classes/NoGi.jpg',
        'headerImgDescription' => 'Gi Class - Coach is showing a technique',
        'description' => 'NoGi description',
    ],

]
?>

<?php
// Sprawdzamy, czy wybrana kategoria istnieje w danych
if (array_key_exists($category, $data)) {
    $info = $data[$category];
} else {
    $info = [
        'title' => 'Błąd',
        'description' => 'Nie znaleziono informacji o wybranej kategorii.',
        // 'schedule' => '',
    ];
}
$subtitle = htmlspecialchars($info['title']);
$btnLink = homePageBaseUrl("") . "pages/bjjclasses/";
$btnName = "Back";
$imgName = htmlspecialchars($info['headerImg']);
$alternativeTxt = htmlspecialchars($info['headerImgDescription']);
include "../header_subpage.php"?>
<div class="about-wrap">
<div class="txt-container">
<div class="txt-title">
            <h1><?php echo htmlspecialchars($info['title']); ?></h1>
        </div>
        <div class="txt-wrap">
            <p>
            <?php echo htmlspecialchars($info['description']); ?>
            </p>
        </div>
</div>
</div>


<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>