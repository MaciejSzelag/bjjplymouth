<?php $title = "Class Description | bjjplymouth";include "../../includes/head.php"?>

<?php
$active = "classes";
include "../../includes/nav.php"?>

<?php
include "class_description.php";
$subtitle = htmlspecialchars($info['title']);
$btnLink = homePageBaseUrl("") . "pages/bjjclasses/";
$btnName = "Go Back";
$imgName = htmlspecialchars($info['headerImg']);
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