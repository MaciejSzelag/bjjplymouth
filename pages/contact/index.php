<?php
    $metaDescription = "Get in touch with Checkmat Plymouth for Brazilian Jiu-Jitsu, Judo, and Wrestling inquiries. Visit us at 68 Faraday Rd, Cattedown, Plymouth PL4 0ST, call +44 7538 123559, or email plymouthcheckmat@gmail.com. Start your martial arts journey today!";
    $metaKeywords    = "Checkmat Plymouth contact, contact BJJ Plymouth, Brazilian Jiu-Jitsu Plymouth contact details, Plymouth martial arts gym location, Checkmat address Plymouth, Plymouth BJJ email, martial arts inquiries Plymouth, contact Checkmat UK.";
    $title           = "Contact Us | bjjplymouth";
include "../../includes/head.php"?>

<?php
    $active = "contact";
include "../../includes/nav.php"?>
<?php
    $subtitle       = "Contact Us";
    $btnLink        = homePageBaseUrl("") . "pages/membership/";
    $btnName        = "Membership";
    $imgName        = "contact-1.jpg";
    $alternativeTxt = "Contact - bjj Plymouth";
include "../header_subpage.php"?>


<div class="contact-wrap">
    <div class="contact-container">
        <div class="contact-h1">
            <h1>Interested in joining or just learning more?</h1>
        </div>
        <div class="contact-box-container">
            <div class="contact-box">
                <div class="contact-form-container">

                    <div class="contact-form">
                        <div class="contact-form-title">
                            <h1>Get in Touch</h1>
                        </div>
                        <form action="send_mail.php" method="POST">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Your @.." required>

                            <label for="phone">Phone number</label>
                            <input type="phone" id="phone" name="phone" placeholder="Your phone number.." required>

                            <label for="subject">Message</label>
                            <textarea id="subject" name="messageContent" placeholder="Write something.." required
                                style="height:200px" ></textarea>

                            <input type="submit" value="Submit" name="submit">

                        </form>
                    </div>
                </div>
            </div>
            <div class="contact-box">

                <div class="address-container">
                    <h1>Reach us at:</h1>
                    <a href="https://www.google.com/maps/place/CheckMat+Plymouth/@50.3689274,-4.1177754,17z/data=!3m1!4b1!4m6!3m5!1s0x486ceca2cd0b9831:0xef09b50b2c375df5!8m2!3d50.3689274!4d-4.1159547!16s%2Fg%2F11cs3q8n7w?authuser=0&entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D">68 Faraday Rd, Cattedown, Plymouth PL4 0ST</a>
                </div>
                <div class="contact-links">
                    <div class="box-link">
                        <span>Tel:</span><a href="tel:+447538123559">+44 7538 123559</a>
                    </div>
                    <div class="box-link">
                        <span>Email:</span><a href="mailto:plymouthcheckmat@gmail.com"> plymouthcheckmat@gmail.com</a>
                    </div>

                </div>
                <div class="contact-map">
                    <a
                        href="https://www.google.com/maps/place/CheckMat+Plymouth/@50.3689274,-4.1177754,17z/data=!3m1!4b1!4m6!3m5!1s0x486ceca2cd0b9831:0xef09b50b2c375df5!8m2!3d50.3689274!4d-4.1159547!16s%2Fg%2F11cs3q8n7w?authuser=0&entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D">
                        <img src="../../images/map-checkmat-location.png"
                            alt="img 68 Faraday Rd, Cattedown, Plymouth PL4 0ST">
                    </a>
                </div>


            </div>
        </div>


    </div>
</div>


<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>