<div class="float-contact">

    <div class="main-icon">

            <?php
                $contacts = [
                    ["href" => "https://www.instagram.com/bjjplymouth/?hl=en", "icon" => "fa-brands fa-instagram"],
                    ["href" => "https://www.facebook.com/BJJPlymouth", "icon" => "fa-brands fa-facebook-f"],
                    ["href" => "mailto:info@bjjplymouth.co.uk", "icon" => "fa-solid fa-at"],
                    ["href" => "tel:+447538123559", "icon" => "fa-solid fa-phone"],
                    ["href" => "https://wa.me/+447538123559?text=Hi%20Amy%20%0A%0AI'm%20interested%20in%20joining%20your%20BJJ%20classes%20and%20would%20like%20to%20know%20more%20about%20the%20registration%20process.%20Could%20you%20please%20provide%20details%20about%20class%20schedules%2C%20fees%2C%20and%20any%20beginner%20requirements%3F%0A%0AThank%20you%2C%20and%20I%20look%20forward%20to%20your%20reply.%0A%0ABest%20regards",
                        "icon"  => "fa-brands fa-whatsapp"],
                ];

                foreach ($contacts as $contact) {
                    echo '<a class="contact-btns" href="' . htmlspecialchars($contact["href"]) . '" target="_blank" rel="noopener noreferrer">';
                    echo '<i class="' . htmlspecialchars($contact["icon"]) . '"></i>';
                    echo '</a>';
                }
            ?>
    </div>


</div>