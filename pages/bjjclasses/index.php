<?php $title = "Classes | bjjplymouth";include "../../includes/head.php"?>

<?php

$active = "classes";
include "../../includes/nav.php"?>
<?php
$subtitle = "Classes";
$btnLink = "link";
$btnName = "See Our Classes";
$imgName = "seminar2024.jpg";
$alternativeTxt = "Bjjplymouth - fight";
include "../header_subpage.php"?>
<div class="classes-wrap">
    <div class="classes-container">
        <h1>We offer a variety of diffrent classes that are tailored around age and skill level</h1>
    </div>
    <div class="classes-list">
    <?php
function activeClass($page, $active)
{
    global $active;
    return $page === $active ? 'active-a' : '';
}
?>
        <ul>
            <li><a href="../class-description/?category=gi" data-image="Gi">Gi BJJ</a></li>
            <li><a href="../class-description/?category=nogi" data-image="NoGI">NoGi BJJ</a></li>
            <li><a href="" data-image="JGi">Juniors Gi and NoGi</a></li>
            <li><a href="" data-image="kid">Kids Gi and NoGi</a></li>
            <li><a href="" data-image="Pro">Pro Training</a></li>
            <li><a href="" data-image="Grap">Grapling</a></li>
            <li><a href="" data-image="om">Open Mat</a></li>
            <li><a href="" data-image="jud">Judo</a></li>
            <li><a href="" data-image="Wr">Wresling</a></li>
            <li><a href="" data-image="MMA">MMA</a></li>
            <!-- <li><a href="" data-image="PL">Private Lessons</a></li> -->
        </ul>
        <div class="class-img-wrap">
        <img id="hover-image" src="../../images/Private-lessons.webp" alt="Preview">

        </div>
    </div>
    <div class="priv-lessons-info">
        <h1>Private Lessons</h1>
        <p>Lead Coaches Ian and Amy are also available for 1:1 sessions or 2:1 sessions, these would be outside class times and would depend on availability. 1:1 sessions allow complete private tuition between you and your coach allowing you to work on what you want to. These are ideal for personalised progression, honing technique, game planning or gaining more confidence. </p>

 <p>2:1 sessions are a great way to get more private tuition but at a lower cost and with a friend to train with. You can choose between you what you want to work on. If you would like the 2:1 sessions but don’t have anyone to join you please contact me and we can discuss options. It is likely that you’re not the only one and we can pair you up.
 </p>
 <div class="btn">
    <a href="https://wa.me/+447877320658?text=Hi%20Amy%20%0A%0AI'm%20interested%20in%20joining%20your%20BJJ%20classes%20and%20would%20like%20to%20know%20more%20about%20the%20registration%20process.%20Could%20you%20please%20provide%20details%20about%20class%20schedules%2C%20fees%2C%20and%20any%20beginner%20requirements%3F%0A%0AThank%20you%2C%20and%20I%20look%20forward%20to%20your%20reply.%0A%0ABest%20regards%2C%0A%5BYour%20Name%5D"  target="_blank">WhatsApp message</a>
 </div>
 <div class="img-wrap">
    <img src="../../images/Private-lessons.webp" alt="Private lessons">
 </div>
    </div>

</div>


<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>
