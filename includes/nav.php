<!-- nav  -->
<nav>
<div class="nav-bar">
            <div class="logo-container">
                <a href="">
                    <div class="logo"></div>
                </a>
            </div>
            <div class="hamburger-container">
                <div class="bars-container" id="menuCross">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <!-- <div class="bar"></div> -->
                </div>
            </div>
        </div>
    <div class="full-page-menu" id="full-menu">
            <div class="menu-container">
                <div class="menu-list">
                    <ul>
                        <?php
// if (!isset($base_url)) {
//     $base_url = '/'; // Domyślna wartość, gdy $base_url nie jest ustawione
// }

function showActive($page, $active)
{
    global $active;
    return $page === $active ? 'active-a' : '';
}
?>
                        <li><a class="<?php echo showActive('home', $active); ?>" href="<?php echo homePageBaseUrl("home"); ?>" data-menu="Home">Home</a></li>
                        <li><a class="<?php echo showActive('about', $active); ?>" href="<?php echo homePageBaseUrl(""); ?>pages/about-us/" data-menu="About">About Us</a></li>
                        <li><a class="<?php echo showActive('timetable', $active); ?>" href="<?php echo homePageBaseUrl(""); ?>pages/timetable/" data-menu="Timetable">Timetable</a></li>
                        <li><a class="<?php echo showActive('classes', $active); ?>" href="<?php echo homePageBaseUrl(""); ?>pages/bjjclasses/" data-menu="Classes">Classes</a></li>
                        <li><a class="<?php echo showActive('membership', $active); ?>" href="<?php echo homePageBaseUrl(""); ?>pages/membership/" data-menu="Classes">Membership</a></li>
                        <li><a class="<?php echo showActive('contact', $active); ?>" href="<?php echo homePageBaseUrl(""); ?>pages/contact/" data-menu="Contact">Contact</a></li>
                        <li><a class="<?php echo showActive('faq', $active); ?>" href="<?php echo homePageBaseUrl(""); ?>pages/FAQ/" data-menu="faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="menu-desc">
                    <p class="p-desc hidden" data-text="Home">Return to the main page and explore everything we
                        offer in Brazilian Jiu-Jitsu.</p>
                    <p class="p-desc hidden" data-text="About">Learn about our mission, values, and the team behind our
                        academy.</p>
                    <p class="p-desc hidden" data-text="Timetable">Check out our training schedule and find a class that
                        suits you.</p>
                    <p class="p-desc hidden" data-text="Classes">Explore our classes for all skill levels, from
                        beginners to advanced practitioners.</p>
                    <p class="p-desc hidden" data-text="Contact">Have questions? Get in touch with us for more
                        information.</p>
                    <p class="p-desc hidden" data-text="faq">Find answers to common questions about training, gear, and
                        more.</p>
                    <p class="p-desc visible initial-txt" id="displayText"> Discover the art
                        of Brazilian Jiu-Jitsu, improve your skills, and join a passionate community. Train with us and
                        unleash your potential!</p>

                </div>

            </div>

        </div>
</nav>
<!-- nav  -->
