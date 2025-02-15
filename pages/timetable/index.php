<?php
    // include '../../config/config.php'; // Relatywna ścieżka do pliku konfiguracyjnego
    $metaDescription = "View the complete timetable for Brazilian Jiu-Jitsu, Judo, and Wrestling classes at Checkmat Plymouth. Find class schedules for beginners, advanced practitioners, and children. Plan your training sessions with ease and join us today!";
    $metaKeywords    = "Checkmat Plymouth timetable, BJJ class schedule Plymouth, Judo timetable Plymouth, Wrestling classes Plymouth, martial arts schedule, Plymouth training sessions, Brazilian Jiu-Jitsu for beginners, advanced BJJ classes Plymouth, kids martial arts Plymouth, weekly martial arts classes.";
    $title           = "Timetable | bjjplymouth";
include "../../includes/head.php"?>
<?php

    $active = "timetable";
include "../../includes/nav.php"?>
<?php
    $subtitle       = "Timetable";
    $btnLink        = homePageBaseUrl("") . "pages/contact/";
    $btnName        = "Contact Now";
    $imgName        = "bjj-fight-checkmat-plymouth.jpg";
    $alternativeTxt = "Bjjplymouth - fight";
include "../header_subpage.php"?>
<div class="title-container">
<h1 class="main-title">Timetable</h1>
</div>

<div class="timetable">
    <div class="table-container">
        <h1>Monday</h1><!-- Monday  -->
        <div class="table-wrap">
            <table>
                <tr>
                    <th rowspan="2">6am <br> 7am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ <br> Amy Winterson and Andy Harris</td>
                </tr>
            </table>
            <!-- <table>
                <tr>
                    <th rowspan="2">7am <br> 8am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Open Mat <br> Ricky Bellingham</td>
                </tr>
            </table> -->
            <table>
                <tr>
                    <th rowspan="2">10am <br> 11am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ <br> Ian Harrop</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">11am <br> 12pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ Pro Training - Adults <br> Ricky Bellingham</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">5:30pm <br> 6:15pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Judo with Gi BJJ (kids) <br> Ricky Bellingham</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">6:30pm <br> 7:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Judo (Adults & Juniors) <br> Ricky Bellingham</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">7:30pm <br> 8:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ<br> Maciej Szelag</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="table-container">
        <h1>Tuesday</h1>   <!-- Tuesday  -->
        <div class="table-wrap">
            <table>
                <tr>
                    <th rowspan="2">10am <br> 11am</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi BJJ (Adults)<br> Ricky Bellingham</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">11am <br> 12pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi Pro Training (Adults)<br>Ian Harrop</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">12pm <br> 1pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Wresling (Adults)<br> Ricky Bellingham</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">6:30pm <br> 7:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi BJJ (Adults, Juniors & Kids over 8 y/o)<br> Ricky Bellingham and Andy Harris</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">7:30pm <br> 8:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi Positional Sparrings (Adults)<br> Andy Harris</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="table-container">
        <h1>Wednesday</h1><!-- Wednesday  -->
        <div class="table-wrap">
            <table>
                <tr>
                    <th rowspan="2">6am <br> 7am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ (Adults)<br>Andy Harris</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">10am <br> 11:30am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ <br> Ian Harrop</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">7pm <br> 8pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ (Adults &Juniors)<br> Ian Harrop</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">8pm <br> 8:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi Pro Training<br> Ian Harrop</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="table-container">
        <h1>Thursday</h1> <!-- Thursday  -->
        <div class="table-wrap">
            <table>
                <tr>
                    <th rowspan="2">6am <br> 7am</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi BJJ (Adults) <br> Ricky Bellingham</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">11am <br> 12pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi BJJ (Adults)<br> Ricky Bellingham</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">12pm <br> 1pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Catch Wrestling (Adults)<br> Ricky Bellingham</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">6:30pm <br> 7:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi BJJ (Adults & Juniors)<br>Ian Harrop</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">7:30pm <br> 8:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi Pro Training (Adults)<br>Ian Harrop</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="table-container">
        <h1>Friday</h1><!-- Friday  -->
        <div class="table-wrap">
            <table>
                <tr>
                    <th rowspan="2">6am <br> 7am</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi BJJ (Adults, Juniors & Kids over 8 y/o) <br> Ricky Bellingham</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">7am <br> 8am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Grappling Hour (Adults & juniors)<br> Ricky Bellingham and Amy Winterson</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">10am <br> 11am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ (Adults)<br> Amy Winterson</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">11am <br> 12pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi Pro Training <br> Amy Winterson</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">7pm <br> 8pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi BJJ<br> Elias Freeman / Aron Tippett</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="table-container">
        <h1>Saturday</h1><!-- Saturday  -->
        <div class="table-wrap">
                    <table>
                <tr>
                    <th rowspan="2">7am <br> 8:30am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ (Adults)<br> Nathan Haynes</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">1pm <br> 2:30am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Specific Training<br> Amy Winterson and Andy Harris</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th rowspan="2">2:30pm <br> 3:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">NoGi Wresling - Kids ONLY<br> Ricky Bellingham</td>
                </tr>
            </table>


        </div>
    </div>
    <div class="table-container">
        <h1>Sunday</h1><!-- Sunday  -->
        <div class="table-wrap">
            <table>
                <tr>
                    <th rowspan="2">9:30am <br> 10:15am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi BJJ (Kids)<br> Ricky Bellingham</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">10:30am <br> 11:15am</th>
                </tr>
                <tr>
                    <td class="td-shadow">Gi & NoGi BJJ Pro Traning (Kids) <br> Ricky Bellingham</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th rowspan="2">10:30am <br> 12:30pm</th>
                </tr>
                <tr>
                    <td class="td-shadow">Open Mat (Adults & Juniors) <br> Amy Winterson and Ian Harrop</td>
                </tr>
            </table>
        </div>
    </div>

</div>
<?php include "../../includes/joinus.php"?>
<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>