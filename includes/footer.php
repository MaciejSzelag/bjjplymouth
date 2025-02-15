<footer class="footer-img">
        <div class="footer-info">
            <div class="f-info-container">
                <h1 class="foot-h1"><span>Start</span> Your <span>BJJ</span> Journey <span>in Plymouth</span> Today!
                </h1>
                <div class="arrows-wrap">
                    <img src="<?php echo homePageBaseUrl(""); ?>images/3-arrows.png" alt="arrows-right">
                </div>
                <div class="contact-info">
                    <address>
                        <h1 class="gym-address">
                            <span>Checkmat Plymouth Gym</span> <br>
                            68 Faraday Rd, Cattedown, Plymouth <br>
                            PL4 0ST.
                        </h1>
                        <h1 class="social-contact">
                            <ul>
                                <li><span><i class="fa-solid fa-phone"></i> Phone:</span> <a
                                        href="tel:+447538123559">07538123559</a></li>
                                <li><span><i class="fa-regular fa-envelope"></i> E-mail:</span> <a
                                        href="mailto:plymouthcheckmat@gmail.com">plymouthcheckmat@gmail.com</a></li>
                                <li> <span><i class="fa-solid fa-hashtag"></i> Social Media:</span>
                                    <a href="https://www.instagram.com/bjjplymouth/?hl=en" class="calss-social inst"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/BJJPlymouth" class="calss-social fb"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                            </ul>
                        </h1>
                    </address>
                </div>
            </div>
        </div>

    </footer>
    <footer>
        <div class="footer">
            <div class="footer-wrap">
                <div class="footer-box">
                    <div class="img-container">
                        <a href="<?php echo homePageBaseUrl(""); ?>" class="img-wrap">
                            <img src="<?php echo homePageBaseUrl(""); ?>images/Logo-bjjocean-checkmat-bjjplymouth-s2.png" alt="">
                        </a>
                    </div>
                    <div class="address-info">
                        <h1 class="h1-info"><span>Checkmat Plymouth Gym</span> <br> <a href="https://www.google.com/maps/place/CheckMat+Plymouth/@50.3689308,-4.1185296,17z/data=!3m1!4b1!4m6!3m5!1s0x486ceca2cd0b9831:0xef09b50b2c375df5!8m2!3d50.3689274!4d-4.1159547!16s%2Fg%2F11cs3q8n7w?authuser=0&entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">68 Faraday Rd, Cattedown,
                                <br>
                                Plymouth PL4 0ST</a></h1>
                    </div>
                </div>
                <div class="footer-box">
                    <div class="additional-info">
                        <h1 class="h1-info h1-upper">About Checkmat Plymouth</h1>
                        <ul>
                        <?php

                            // function showActive($page, $active)
                            // {
                            //     global $active;
                            //     return $page === $active ? 'active-a' : '';
                            // }
                        ?>
                            <li><a href="<?php echo homePageBaseUrl(""); ?>pages/faq/" >FAQs</a></li>
                            <li><a href="<?php echo homePageBaseUrl(""); ?>pages/bjjclasses/">Classes</a></li>
                            <li><a href="<?php echo homePageBaseUrl(""); ?>pages/about-us/">About US</a></li>
                            <li><a href="<?php echo homePageBaseUrl(""); ?>pages/membership/">Membership</a></li>
                            <li><a href="<?php echo homePageBaseUrl(""); ?>pages/timetable/">Timetable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-box">
                    <div class="additional-info">
                        <h1 class="h1-info h1-upper">Connect with Checkmat</h1>
                        <ul>
                            <li>
                                <a class="inst" href="https://www.instagram.com/bjjplymouth/?hl=en"  target="_blank" rel="noopener noreferrer" ><i class="fa-brands fa-instagram"></i></a>
                                <a class="fb" href="https://www.facebook.com/BJJPlymouth" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php include "attention.php"; ?>
    <script src="<?php $jsPath;if (isset($jsPath)) {
        echo $jsPath;
    } else {
        "";
}
?>js/script.js"></script>
   <script src="<?php $jsPath;if (isset($jsPath)) {
                        echo $jsPath;
                    } else {
                        "";
                }
                ?>js/animation.js"></script>

</body>

</html>
