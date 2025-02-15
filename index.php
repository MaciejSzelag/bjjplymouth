
<?php

    $title    = "Bjj Plymouth | Checkmat | OceanBJJ";
    $cssPath  = "";
    $homePage = true;
include "includes/head.php"?>


    <!-- <i class="fa-brands fa-facebook-f"></i> -->

        <div class="animation-in-wrap">
            <div class="animation-container">
                <div class="board-container">
                    <div class="square white"></div>
                    <div class="square black"></div>
                    <div class="square black"></div>
                    <div class="square white"></div>
                </div>
            </div>
        </div>


    <!-- nav -->
    <?php
        $active = $base_url = "home";

    include "includes/nav.php"?>
    <!-- nav -->

    <!-- header  -->
    <header>

        <div class="header-wrap">
            <div class="header-container">
                <div class="header-title">
                    <h1>Welcome <br>to <br> <span class="span-white">Checkmat Plymouth</span></h1>
                    <h2>Expert Brazilian Jiu-Jitsu Training in Plymouth</h2>
                    <div class="btn-head ">
                        <button class="btn-orange"><a href="<?php echo homePageBaseUrl(""); ?>pages/contact/">Contact Us</a></button>
                    </div>
                </div>
                <div class="header-img">
                    <div class="img-container-cover"></div>
                    <div class="img-container">

                    </div>
                </div>


            </div>

        </div>
        <div class="arrow-down-container">

            <div class="arrow-down">
                <i class="fa-solid fa-chevron-down"></i>
            </div>

        </div>
    </header>
    <!-- header  -->
    <main>

        <article class="article-color-gold">
            <div class="article-container ">
                <div class="article-wrap padding-sm bg-color-1">
                    <div class="three-wheels">
                        <div class="wheel w-1"></div>
                        <div class="wheel w-2"></div>
                        <div class="wheel w-3"></div>
                        <div class="wheel w-4"></div>
                    </div>
                    <div class="article-title">
                        <h1>Are you looking for Brazilian Jiu-Jitsu in Plymouth?</h1>
                    </div>
                    <div class="article-content">
                        <p>Looking for the best Brazilian Jiu-Jitsu (BJJ) training in Plymouth? <br>
                            Checkamt Plymouth offers top-tier instruction in a welcoming and inclusive environment. <br>
                            Whether
                            you're new to BJJ or an experienced practitioner, our Plymouth-based BJJ academy is the
                            perfect
                            place to improve your skills, fitness, and confidence.</p>
                    </div>
                    <div class="article-btns">
                        <div class="btn-wrap">
                            <div class="btn-a"><a class="a-btn" href="<?php echo homePageBaseUrl(""); ?>pages/bjjclasses/">Clasess</a></div>
                            <div class="btn-a"><a class="a-btn btn-orange" href="<?php echo homePageBaseUrl(""); ?>pages/contact/">Contact Us</a></div>
                            <div class="btn-a"><a class="a-btn" href="<?php echo homePageBaseUrl(""); ?>pages/membership/">Membership</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="article-container ">
                <div class="article-wrap">
                    <div class="bg-img">
                        <div class="bg-cover"></div>
                    </div>
                    <div class="info-content">
                        <div class="info-wrap info-sm">
                            <div class="info-title">
                                <h1>Why train BJJ at Checkmat in Plymouth?</h1>
                            </div>
                            <div class="info-sub-title">
                                <p>Everyone is different, so we make sure you can choose a plan that works best for you.
                                </p>
                            </div>
                        </div>
                        <div class="info-wrap">
                            <div class="info-description">
                                <div class="description">

                                    <h1>Professional BJJ Instructors in Plymouth</h1>
                                    <div class="desc-content-wrap">
                                        <p>Our instructors are experienced BJJ practitioners with a deep understanding
                                            of
                                            the
                                            art. They are dedicated to helping you progress in your Brazilian Jiu-Jitsu
                                            journey,
                                            whether you’re a beginner or advanced student. Learn from the best in
                                            Plymouth!
                                        </p>
                                        <div class="btn-info">
                                            <div class="btn"><a href="<?php echo homePageBaseUrl(""); ?>pages/about-us/">
                                                    More about Us
                                                </a></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="description">

                                    <h1>Inclusive and Friendly BJJ Community</h1>
                                    <div class="desc-content-wrap">
                                        <p>At Checkamt in Plymouth, we believe that Brazilian Jiu-Jitsu is for everyone.
                                            Our
                                            gym
                                            is a friendly and inclusive space where you can train BJJ, make new friends,
                                            and
                                            be
                                            part of a supportive community.</p>
                                        <div class="btn-info">
                                            <div class="btn"><a href="<?php echo homePageBaseUrl(""); ?>pages/timetable/">
                                                 Timetable
                                                </a></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="description ">

                                    <h1>Comprehensive Brazilian Jiu-Jitsu Programs</h1>
                                    <div class="desc-content-wrap">
                                        <p>We offer a wide range of BJJ classes in Plymouth to suit all ages and skill
                                            levels.
                                            Whether you’re interested in beginner BJJ classes, advanced training, or
                                            children’s
                                            BJJ programs, we have something for everyone.</p>
                                        <div class="btn-info">
                                            <div class="btn"><a href="<?php echo homePageBaseUrl(""); ?>pages/bjjclasess/">
                                                    See our classes
                                                </a></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </article>

        <?php include "includes/joinus.php"?>
        <article>
            <div class="article-container">
                <div class="article-wrap">
                    <div class="programs-list">
                        <h1 class="title-program">Our BJJ Programs in Plymouth</h1>
                        <div class="program-box-container">
                            <div class="program-box">
                                <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>
                                <div class="inf-box">
                                    <h1>Beginner Brazilian Jiu-Jitsu Classes in Plymouth</h1>
                                    <p>New to Brazilian Jiu-Jitsu? Our beginner BJJ classes in Plymouth focus on the
                                        fundamentals of BJJ, including basic techniques, positioning, and grappling
                                        principles.

                                    </p>
                                </div>
                            </div>
                            <div class="program-box">
                                <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>
                                <div class="inf-box">
                                    <h1>Advanced BJJ Training in Plymouth</h1>
                                    <p>For experienced BJJ students in Plymouth, our advanced classes offer rigorous
                                        drills,
                                        sparring sessions, and competition-focused training.

                                    </p>
                                </div>
                            </div>
                            <div class="program-box">
                                <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>
                                <div class="inf-box">
                                    <h1>Kids’ BJJ Classes in Plymouth</h1>
                                    <p>Looking for Brazilian Jiu-Jitsu classes for kids in Plymouth? Our kids’ program
                                        teaches discipline, respect, and teamwork in a fun and engaging way.

                                    </p>
                                </div>
                            </div>

                            <div class="program-box">
                                <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>
                                <div class="inf-box">
                                    <h1>Wrestling for Brazilian Jiu-Jitsu</h1>
                                    <p>Enhance your grappling skills with our Wrestling for Jiu-Jitsu classes in
                                        Plymouth.
                                        Wrestling techniques are essential for improving your takedowns, control, and
                                        overall effectiveness in Brazilian Jiu-Jitsu. Perfect for BJJ practitioners
                                        looking
                                        to gain a competitive edge.

                                    </p>
                                </div>
                            </div>
                            <div class="program-box">
                                <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>
                                <div class="inf-box">
                                    <h1>Judo for Jiu-Jitsu in Plymouth</h1>
                                    <p>Master the art of throws and takedowns with our Judo for Jiu-Jitsu sessions in
                                        Plymouth. Judo complements BJJ by teaching effective standing techniques and
                                        grip
                                        fighting, crucial for gaining dominant positions and initiating ground control.
                                        Our
                                        dedicated Judo class helps BJJ practitioners refine their ability to transition
                                        smoothly from standing to the ground, enhancing their overall grappling game.

                                    </p>
                                </div>
                            </div>
                            <div class="program-box">
                                <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>
                                <div class="inf-box">
                                    <h1>MMA Classes in Plymouth</h1>
                                    <p>In addition to our Brazilian Jiu-Jitsu program, we offer two MMA (Mixed Martial
                                        Arts)
                                        sessions per week at our Plymouth academy. These classes are perfect for those
                                        interested in exploring different martial arts disciplines or improving their
                                        striking, grappling, and overall combat skills. Our MMA classes provide a
                                        well-rounded workout and are a great complement to your BJJ training.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="article-btns">
                            <div class="btn-wrap">
                                <div class="btn-a"><a class="a-btn" href="<?php echo homePageBaseUrl(""); ?>pages/bjjclasses/">See our Classes</a></div>
                                <div class="btn-a"><a class="a-btn btn-orange" href="<?php echo homePageBaseUrl(""); ?>pages/contact/">Contact Us</a></div>
                                <div class="btn-a"><a class="a-btn" href="<?php echo homePageBaseUrl(""); ?>pages/membership/">Membership</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </article>
        <article>
            <div class="article-container">
                <div class="article-wrap">
                    <div class="testi-wrap">
                        <div class="testi-box">
                            <i class="fa-solid fa-quote-left"></i>
                            <div class="blockquote">
                                <p class="p-blockquote">
                                    <q>I joined CheckMat Plymouth 3 years ago after I finished rehabitating an injury I sustained prior. It was a really friendly atmosphere with great delivery of technique. They were able to accommodate my inability to perform some of the movements due to my injury and I feel I have made great progress. So happy to have found this awesome club!</q>
                                </p>
                                <div class="footer-blockquote">
                                    <i> - Guy Servis</i>
                                </div>
                            </div>

                        </div>
                        <div class="testi-box">
                            <i class="fa-solid fa-quote-left"></i>
                            <div class="blockquote">
                                <p class="p-blockquote">
                                    <q>Best place to train in Plymouth, friendly welcoming team for new and old players. No club politics here, everyone welcome to grow.</q>
                                </p>
                                <div class="footer-blockquote">
                                    <i> - Paul Roach</i>
                                </div>
                            </div>

                        </div>
                        <div class="testi-box">
                            <i class="fa-solid fa-quote-left"></i>
                            <div class="blockquote">
                                <p class="p-blockquote">
                                    <q>Checkmat is an excellent place for both beginners and advanced practitioners to train in Brazilian Jiu-Jitsu. The instructors are highly skilled and provide valuable guidance to help students of all levels progress. The welcoming atmosphere makes it a great environment to learn and improve.</q>
                                </p>
                                <div class="footer-blockquote">
                                    <i> - Maciej Szelag</i>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            </div>
        </article>
    </main>

    <?php include "includes/footer.php"?>