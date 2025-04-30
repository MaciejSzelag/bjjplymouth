<?php
    $metaDescription = "Explore a variety of Brazilian Jiu-Jitsu, Judo, and Wrestling classes at Checkmat Plymouth, tailored for all ages and skill levels. From Fundamentals and All Levels to Kids' classes and private lessons, our expert coaches Ian and Amy provide personalized training to help you reach your goals. Join us today!";
    $metaKeywords    = "Checkmat Plymouth classes, BJJ classes Plymouth, Gi & NoGi classes, Kids BJJ Plymouth, private BJJ lessons Plymouth, personalized martial arts training, 1:1 BJJ sessions, 2:1 private tuition, fundamentals BJJ classes, competition classes Plymouth, junior martial arts classes, ProSportGrappling 2024, open mat Plymouth.";

$title = "Classes";include "../../includes/head.php"?>

<?php

    $active = "classes";
include "../../includes/nav.php"?>
<?php
    $subtitle       = "Classes";
    $btnLink        = "../timetable/";
    $btnName        = "Check out our timetable";
    $imgName        = "seminar2024.jpg";
    $alternativeTxt = "Bjjplymouth - fight";
include "../header_subpage.php"?>
<div class="classes-wrap">
    <div class="classes-container">
        <h1>We offer a variety of diffrent classes that are tailored around age and skill level</h1>
    </div>
    <div class="classes-list" id="bjj-classes">

        <ul>
            <li><a href="../class-description/?category=fundamentals" data-image="Fundamentals">Fundamentals Gi & NoGi</a></li>
            <li><a href="../class-description/?category=Gi" data-image="Gi">Gi All Levels & Junior Gi Classes</a></li>
            <li><a href="../class-description/?category=nogi-all-levels-and-juniors" data-image="NoGi">NoGi All Levels & Junior NoGi Classes</a></li>
            <li><a href="../class-description/?category=openmat" data-image="om">Open Mat - Adults Only</a></li>
            <li><a href="../class-description/?category=kids" data-image="kid">Kids Gi & Kids NoGi</a></li>
            <li><a href="../class-description/?category=kids-juniors-competition-class" data-image="JGi">Kids/Juniors Competition Class</a></li>
        </ul>
        <div class="class-img-wrap">
        <img id="hover-image" src="../../images/bjj-classes/bjj-plymouth-pro-sport-grappling.jpg" alt="Bjj plymouth - Checkmat - ProSportFrappling 2024">

        </div>
    </div>




</div>



<article class="article-color-grey">
            <div class="article-container ">
                <div class="article-wrap padding-sm ">
                    <div class="article-btns">
                        <div class="btn-wrap">
                            <div class="btn-a"><a class="a-btn" href="../timetable/">Timetable</a></div>
                            <!-- <div class="btn-a"><a class="a-btn btn-orange" href="">Contact Us</a></div> -->
                            <div class="btn-a"><a class="a-btn btn-orange" href="../membership/">Membership</a></div>
                        </div>
                    </div>
                </div>
            </div>
</article>
        <div class="classes-wrap">
    <div class="priv-lessons-info">
        <h1>Private Lessons</h1>
        <p>Lead Coaches Ian and Amy are also available for 1:1 sessions or 2:1 sessions, these would be outside class times and would depend on availability. 1:1 sessions allow complete private tuition between you and your coach allowing you to work on what you want to. These are ideal for personalised progression, honing technique, game planning or gaining more confidence. </p>

 <p>2:1 sessions are a great way to get more private tuition but at a lower cost and with a friend to train with. You can choose between you what you want to work on. If you would like the 2:1 sessions but don’t have anyone to join you please contact me and we can discuss options. It is likely that you’re not the only one and we can pair you up.
 </p>
 <div class=" pl-btn-wrap">
 <a class="pl-btn" href="https://wa.me/447951950205" target="_blank" rel="noopener noreferrer">
 Message Ian on WhatsApp
</a>
 <a class="pl-btn" href="https://wa.me/447538123559" target="_blank" rel="noopener noreferrer">
 Message Amy on WhatsApp
</a>



 </div>

 <div class="img-wrap">
    <img src="../../images/bjj-classes/Ian-Harrop.jpg" alt="Private lessons with Ian Harrop" class="img-ian">
 </div>
    </div>

</div>


<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>
