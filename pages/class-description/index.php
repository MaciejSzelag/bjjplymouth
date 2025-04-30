<?php
    $metaDescription = "Explore a variety of Brazilian Jiu-Jitsu, Judo, and Wrestling classes at Checkmat Plymouth, tailored for all ages and skill levels. From Fundamentals and All Levels to Kids' classes and private lessons, our expert coaches Ian and Amy provide personalized training to help you reach your goals. Join us today!";
    $metaKeywords    = "Checkmat Plymouth classes, BJJ classes Plymouth, Gi & NoGi classes, Kids BJJ Plymouth, private BJJ lessons Plymouth, personalized martial arts training, 1:1 BJJ sessions, 2:1 private tuition, fundamentals BJJ classes, competition classes Plymouth, junior martial arts classes, ProSportGrappling 2024, open mat Plymouth.";

$title = "Class Description";include "../../includes/head.php"?>

<?php
    $active = "classes";
include "../../includes/nav.php"?>

<?php
    include "class_description.php";
    $subtitle       = htmlspecialchars($info['title']);
    $btnLink        = homePageBaseUrl("") . "pages/bjjclasses/";
    $btnName        = "Go Back";
    $imgName        = htmlspecialchars($info['headerImg']);
    $alternativeTxt = htmlspecialchars($info['headerImgDescription']);
include "../header_subpage.php"?>
<div class="about-wrap">
<div class="txt-container">
<div class="txt-title">
            <h1>About the Class</h1>
        </div>
        <div class="txt-wrap">
            <p> <span class="color-title"><?php echo htmlspecialchars($info['title']); ?></span> <br>
            <?php echo htmlspecialchars($info['description']); ?>
            </p>
        </div>
</div>
</div>

<article class="article-color-grey">
            <div class="article-container ">
                <div class="article-wrap padding-sm ">
                    <div class="article-btns">
                        <div class="btn-wrap">
                            <div class="btn-a"><a class="a-btn " href="../bjjclasses/#bjj-classes" >Go Back</a></div>
                        </div>
                    </div>
                </div>
            </div>
</article>



<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>