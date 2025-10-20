<?php
// dane seminarium (ręcznie ustawione)
$seminar = [
    'name' => 'BJJ Seminar with Professor Marco Canha',
    'description' => 'Join Checkmat Plymouth for an exclusive BJJ seminar with Professor Marco! Improve your technique, roll with top-level practitioners, and be part of an amazing day of learning and training.',
    'startDate' => '2025-12-07T12:00',
    'endDate' => '2025-12-07T15:00',
    'price-member' => '25',
    'price-non-member' => '30',
    'image' => 'https://bjjplymouth.co.uk/images/seminar/Marco_Canha/Marco_Canha.jpg',
    'url' => 'https://bjjplymouth.co.uk/pages/seminar'
];

// meta dane
$metaDescription = "Join Checkmat Plymouth today and enjoy exclusive membership benefits! Choose from tailored packages for adults, juniors, and kids, including unlimited training and custom Gi deals. Unlock your potential and become part of our vibrant martial arts community! Don’t miss our special BJJ seminar with Professor Marco — learn advanced techniques, improve your game, and train with one of the best!";
$metaKeywords    = "Brazilian Jiu-Jitsu Plymouth, Checkmat Plymouth, BJJ classes, BJJ seminar Marco, BJJ training UK, martial arts Plymouth, self defence, kids BJJ, adult BJJ, Jiu-Jitsu club Plymouth, BJJ membership";
$title           = "Seminar - Marco Canha 7/12/2025";

include "../../includes/head.php";
?>

<?php
$active = "seminar";
include "../../includes/nav.php";
?>

<?php
$subtitle       = "Seminar";
$btnLink        = homePageBaseUrl("") . "pages/contact/";
$btnName        = "Contact";
$imgName        = "seminar/Marco_Canha/Marco_Canha_ibjjf.webp";
$alternativeTxt = "Marco Canha - Seminar at Checkmat Plymouth";
include "../header_subpage.php";
?>

<?php if (!empty($seminar)) : ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "<?= htmlspecialchars($seminar['name']) ?>",
  "description": "<?= htmlspecialchars($seminar['description']) ?>",
  "startDate": "<?= $seminar['startDate'] ?>",
  "endDate": "<?= $seminar['endDate'] ?>",
  "eventStatus": "https://schema.org/EventScheduled",
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "location": {
    "@type": "Place",
    "name": "Checkmat Plymouth",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Unit 4, St. Modwen Road",
      "addressLocality": "Plymouth",
      "postalCode": "PL6 8LH",
      "addressCountry": "UK"
    }
  },
  "organizer": {
    "@type": "SportsOrganization",
    "name": "Checkmat Plymouth",
    "url": "https://bjjplymouth.co.uk"
  },
  "image": "<?= $seminar['image'] ?>",
  "offers": [
    {
      "@type": "Offer",
      "name": "Member Ticket",
      "price": "<?= $seminar['price-member'] ?>",
      "priceCurrency": "GBP",
      "url": "<?= $seminar['url'] ?>"
    },
    {
      "@type": "Offer",
      "name": "Non-Member Ticket",
      "price": "<?= $seminar['price-non-member'] ?>",
      "priceCurrency": "GBP",
      "url": "<?= $seminar['url'] ?>"
    }
  ]
}
</script>
<?php endif; ?>

<div class="about-wrap">
    <div class="txt-container">

        <div class="txt-title">
            <h1>Professor Marco Canha – December 7th</h1>
        </div>
        <div class="txt-wrap txt-wide">
            <p>
                <span class="color-title">BJJ Plymouth Seminar with Professor Marco Canha</span><br>
                Join us for an exclusive Brazilian Jiu-Jitsu seminar with Professor Marco Canha, one of the most
                 respected black belts under Ricardo Vieira and a long-time member of the legendary Checkmat Team.
                This is a unique opportunity to learn directly from a world-class instructor who has coached and competed at the highest level around the globe.
            </p>
            <p>Professor Marco is known for his technical precision, dynamic style, and deep understanding of both gi and no-gi grappling. 
                Whether you're a beginner or an advanced practitioner, this seminar will help you expand your BJJ knowledge, sharpen your technique, 
                and gain valuable insights that you can immediately apply to your game.</p>

        </div>
                <div class="txt-img-wrap img-seminar">
            <img src="../../images/seminar/Marco_Canha/Marco_Canha.jpg" alt="Seminar Marco Canha">
        </div>
        <div class="txt-wrap txt-wide">
            <p><span class="color-title">Don't miss</span><br>
                Don’t miss your chance to train with one of the true masters of Brazilian Jiu-Jitsu.
                Places are limited — secure your spot today and take your BJJ to the next level!
            </p>
             <p><span class="color-title">Date:</span> Saturday, December 7th </p>
            <p><span class="color-title">Location:</span> Checkmat Plymouth </p>
            <p><span class="color-title">Time:</span> 12 pm - 3 pm </p>
            <p><span class="color-title">Price:</span> £25 Members <br> £30 Non-Members </p>
            
        </div>

      
       



    </div>
</div>



<?php $jsPath = "../../";include $jsPath . "includes/footer.php"?>