<?php
    // include '../../config/config.php'; // Relatywna ścieżka do pliku konfiguracyjnego
    $metaDescription = "View the complete timetable for Brazilian Jiu-Jitsu, Judo, and Wrestling classes at Checkmat Plymouth. Find class schedules for beginners, advanced practitioners, and children. Plan your training sessions with ease and join us today!";
    $metaKeywords    = "Checkmat Plymouth timetable, BJJ class schedule Plymouth, Judo timetable Plymouth, Wrestling classes Plymouth, martial arts schedule, Plymouth training sessions, Brazilian Jiu-Jitsu for beginners, advanced BJJ classes Plymouth, kids martial arts Plymouth, weekly martial arts classes.";
    $title           = "Timetable";
include "../../includes/head.php"?>
<?php

    $active = "timetable";
include "../../includes/nav.php"?>
<?php
    $subtitle       = "Timetable";
    $btnLink        = homePageBaseUrl("") . "pages/contact/";
    $btnName        = "Contact Us";
    $imgName        = "bjj-fight-checkmat-plymouth.jpg";
    $alternativeTxt = "Bjjplymouth - fight";
include "../header_subpage.php"?>
<?php
    // KONFIGURACJA - EDYTUJ TUTAJ
    $title = "Timetable";

    $days = [
        'Monday'    => [
            ['6am', '7am', 'Gi BJJ', 'Andy Harris'],
            ['10am', '11am', 'Open Mat', 'Ian Harrop'],
            ['11am', '12pm', 'Gi BJJ Pro Training - Adults', 'Ian Harrop'],
            ['5:30pm', '6:15pm', 'Judo with Gi BJJ (kids)', 'Ian Harrop'],
            ['6:30pm', '7:15pm', 'Gi BJJ Fundamentals', 'Amy Wintrson'],
            ['7:15pm', '8pm', 'Positional Sparring', 'Amy Winterson'],

        ],
        'Tuesday'   => [
            ['10am', '11am', 'Open Mat', 'Ian Harrop'],
            ['11am', '12pm', 'NoGi Pro Training (Adults)', 'Ian Harrop'],
            ['12pm', '1pm', 'Wresling (Adults)', 'Ian Harrop'],
            ['6:30pm', '7:30pm', 'NoGi BJJ (Adults, Juniors & Kids over 8 y/o)', 'Andy Harris'],
            ['7:30pm', '8:30pm', 'NoGi Positional Sparrings (Adults)', 'Andy Harris'],
        ],
        'Wednesday' => [
            ['6am', '7am', 'Gi BJJ (Adults)', 'Andy Harris'],
            ['10am', '11:00am', 'Open Mat', 'Ian Harrop'],
            ['7pm', '8pm', 'Open Mat', 'Ian Harrop'],
            ['8pm', '8:30pm', 'Gi Pro Training', 'Ian Harrop'],
        ],
        'Thursday'  => [
            ['10am', '11am', 'OPen Mat', 'Ian Harrop'],
            // ['11am', '12pm', 'NoGi BJJ (Adults)', 'Ricky Bellingham'],
            ['6:30pm', '7:30pm', 'Open Mat', 'Ian Harrop'],
            // ['7:30pm', '8:30pm', 'NoGi Pro Training (Adults)', 'Ian Harrop'],
        ],
        'Friday'    => [
            ['6am', '7am', 'Open Mat', 'Ian Harrop'],
            ['7am', '8am', 'Grappling Hour (Adults & juniors)', 'Ian Harrrop'],
            ['10am', '11am', 'Open Mat', 'Ian Harrop'],
            ['11am', '12pm', 'Gi Pro Training', 'Ian Harrop'],
            ['7pm', '8pm', 'Judo / Take Downs', 'Paul Roach'],
        ],
        'Saturday'  => [
            ['7am', '8:30am', 'Gi BJJ (Adults)', 'Nathan Haynes'],
            ['1pm', '2:30am', 'Specific Training', 'Andy Harris'],
            ['2:30pm', '3:30pm', 'NoGi Wresling - Kids ONLY', 'Ricky Bellingham'],
        ],
        'Sunday'    => [
            ['9:30am', '10:15am', 'Gi BJJ (Kids)', 'Ian Harrop'],
            ['10:30am', '11:15am', 'Gi & NoGi BJJ - Kids Sparrings', 'Ian Harrop'],
            ['10:30am', '12:30pm', 'Open Mat (Adults & Juniors)', 'Ian Harrop'],
        ],
    ];
?>


    <div class="title-container">
        <h1 class="main-title"><?php echo htmlspecialchars($title); ?></h1>
    </div>

    <div class="timetable">
        <?php foreach ($days as $day => $classes): ?>
            <div class="table-container">
                <h1><?php echo htmlspecialchars($day); ?></h1>
                <div class="table-wrap">
                    <?php foreach ($classes as $class): ?>
                        <table>
                            <tr>
                                <th rowspan="2"><?php echo htmlspecialchars($class[0]); ?><br><?php echo htmlspecialchars($class[1]); ?></th>
                            </tr>
                            <tr>
                                <td class="td-shadow"><?php echo htmlspecialchars($class[2]); ?><br><?php echo htmlspecialchars($class[3]); ?></td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
<?php include "../../includes/joinus.php"?>
<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>