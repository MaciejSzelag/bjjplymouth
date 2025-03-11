<?php

$category = $_GET['category'] ?? '';
$data     = [
    'fundamentals'                   => [
        'title'                => 'Fundamentals Gi & NoGi',
        'headerImg'            => 'bjj-classes/Fundamentals.jpg',
        'headerImgDescription' => 'Gi Class - Coach is showing a technique',
        'description'          => 'These are our beginners sessions working on the main fundamental concepts of BJJ. Although open to all our adult members we suggest that when you reach blue belt and higher you aim to attend more of the all levels classes. These classes will focus more on technique and building blocks of BJJ with movement drills added in. There will also be some specific training where you can put drills into action with added resistance and there will be some sparring.
        If you are a complete beginner we suggest you start with these sessions however if it doesn’t fit your schedule you are able to attend the all levels classes too.
        In the Gi classes a Gi must be worn, rash guards under are optional. And in the NoGi sessions we wear rash guard with spats &/ shorts. if it is your first session and you don’t have a Gi or NoGi wear please wear comfortable gym clothing e.g shorts/leggings & T-shirt. Please try to avoid pockets, zips and buttons as these may catch or scratch people. ',
    ],
    'Gi'                             => [
        'title'                => 'Gi All Levels & Junior Gi Classes',
        'headerImg'            => 'bjj-classes/Gi.jpg',
        'headerImgDescription' => 'Gi Class - Coach is showing a technique',
        'description'          => 'This class is aim at all levels, even those that have never trained before. In a standard class there will be a warm up exploring basis movement, followed by drilling technique and finally specific training or sparing where you can put what you’ve learnt into action. Gi’s are worn throughout this class, those that are new may be able to borrow a club Gi if there is one available, if not the coach will adapt the techniques where necessary.
        The technique usually progresses throughout the class allowing those that are new to focus on the basics whilst those that have been training a while can advance and be challenged.
        These classes are open to adults (age 18+) and juniors (age 12+). Adults and Juniors will be separated slightly by only training with those in the same age bracket, this is to allow everyone to benefit and get the most out of their training (exemptions may be made dependent on specific circumstances). ',
    ],
    'nogi-all-levels-and-juniors'    => [
        'title'                => 'NoGi All Levels & Junior NoGi Classes',
        'headerImg'            => 'bjj-classes/nogi.jpg',
        'headerImgDescription' => 'Ricky Bellingham - All Stars Gold medalist',
        'description'          => 'These classes follow the same structure, and are for the same levels as the Gi All levels classes.
        However instead of wearing the Gi we wear Shorts/Spats & a Rashguard. Although many of the techniques transfer from our Gi classes, here you don’t have the Gi to hold and grip making the moves and controls slightly different.
        ',
    ],
    'Gi-&-NoGi-Q-and-A'              => [
        'title'                => 'Gi & NoGi Q and A / Competition Class',
        'headerImg'            => 'bjj-classes/Pro.jpg',
        'headerImgDescription' => 'Pro Tranining at Bjj Plymouth',
        'description'          => 'There will be a coach present leading the session which will vary depending on needs of the club.
        If there is a competition coming up and some of our members are competing there may be more focus on marathon rolls and sparring. other sessions might be open for you to come with questions.
        There also may be time to work on your own techniques or pick a technique you’ve trained in class and develop it, the coach present will be there to assist,
        make suggestions and correct when needed as in all other sessions. Other times there may be more fitness based training incorporated or free rolling time. ',

    ],
    'openmat'                        => [
        'title'                => 'Open Mat - Adults Only',
        'headerImg'            => 'bjj-classes/om.jpg',
        'headerImgDescription' => 'Laura Riccobono win - ADCC',
        'description'          => 'This is an open mat session open to all members to come to, this isn’t a taught session and therefore there is no cost to this for paying members of the club.
        This is an opportunity to come and work through what you have learnt in previous sessions, drill or roll. An instructor will be there for you to ask questions or advice regarding you game.',

    ],
    'kids'                           => [
        'title'                => 'Kids Gi & Kids NoGi',
        'headerImg'            => 'bjj-classes/kid.jpg',
        'headerImgDescription' => 'Bjj Plymouth kids',
        'description'          => 'Kids classes are suitable for children age between 7 to 11. This is a 45 min session with a mixture of drilling, specific training, sparing and games.
        Many of the games we play work on movements required during JiuJitsu as well as working on general fitness and fun. Techniques are varied and work to build confidence,
        learn the sport increase motor skills and work on basic self defence skills with a BJJ focus.
        There are 2 sessions a week which are both Gi Sessions. For new students wearing general active wear to start is fine. Try to avoid zips, buttons and pockets where possible.
        We aim to make the classes enjoyable and fun whilst progressing in Brazilian Jiu Jitsu. We cater for all interests from those who want to compete to those who just want to come and have fun.',

    ],
    'kids-juniors-competition-class' => [
        'title'                => 'Kids/Juniors Competition Class',
        'headerImg'            => 'bjj-classes/JGi.jpg',
        'headerImgDescription' => 'Ian Harrop and Eva at bjj Plymouth',
        'description'          => 'This class is best suited to those that want to compete and/or enjoy sparring.
        This class runs alongside the adults open mat on a Sunday 10-11am. These sessions will mostly be rounds of sparring but the coach may change it up doing specific training or drills as necessary.
        There will be lots of opportunities for students to ask questions during these sessions too.
        Students are able to train Gi or NoGi at this time, we may suggest more of one focus depending on up and coming competitions that some may of entered.
        We encourage you to have you Gi in every session as the jacket can be removed and you can still do NoGi. ',

    ],
];
// Sprawdzamy, czy wybrana kategoria istnieje w danych
if (array_key_exists($category, $data)) {
    $info = $data[$category];
} else {
    $info = [
        'title'       => 'Error',
        'description' => 'No information found for the selected category.',
        // 'schedule' => '',
    ];
}
