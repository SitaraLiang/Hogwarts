<?php
$lang = 'fr';

if (isset($_GET['lang'])) {
    if ($_GET['lang'] === 'en' || $_GET['lang'] === 'fr') {
        setcookie(
            'lang',
            $_GET['lang'],
            time() + 60 * 60 * 24 * 365,
            '', // Path: The cookie is available across the entire domain
            '', // Domain: The cookie is available on all subdomains
            true, // Secure: The cookie is only transmitted over secure HTTPS connections
            true, // HttpOnly: The cookie is only accessible via HTTP(S), not via JavaScript
        );
        $lang = $_GET['lang'];
    }
} else {
    if (isset($_COOKIE['lang']) && ($_COOKIE['lang'] === 'en' || $_COOKIE['lang'] === 'fr')) {
        $lang = $_COOKIE['lang'];
    }
}


if ($lang === 'en') {
    require_once 'assets/locales/en.php';
} else {
    require_once 'assets/locales/fr.php';
}
?>




<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>Hogwarts</title>
       <link rel="stylesheet" href="./assets/css/template.css">
       <link rel="stylesheet" href="./assets/css/keyframes.css">
       <link rel="stylesheet" href="./assets/css/style.css">

       <!--
            defer: ensure that your scripts are executed after the DOM has been fully loaded,
       -->
       <script src="./assets/js/script.js" defer></script>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    
    </head>
           
   <body>

   <?php
    require_once 'assets/template/nav.php';
    ?>



    <main>

        
        <section>
            <article>
                <article style="background-image: url(&quot;./assets/img/Hogwarts-Background.jpg&quot;);">
                    <img src="./assets/img/Hogwarts-Background.jpg" alt="The Great Hall of Hogwarts" style="display:none;">
                </article>

        
                <section>
                    <header>    
                        <h3>
                            Draco Dormiens Nunquam Titillandus
                        </h3>
                        <p>
                            <?= $trad['section1-index']['subtitle'] ?></p>

                    </header>
                </section>
        
                <p></p>
        
            </article>
        </section>

        <section>
            <article>
                <p>
                <img src="./assets/img/Hogwarts_Logo.png" alt="The official school logo of Hogwarts">
                </p>
                <h1>
                    <?= $trad['section2-index']['article1']['title'] ?>
                </h1>
                <p>
                    <?= $trad['section2-index']['article1']['description'] ?>
                </p>
                <a href="#"><?= $trad['section2-index']['article1']['link'] ?></a>
            </article>
            <article>
                <p>
                <img src="https://aiartes.com/works/albus-dumbledore-midjourney-art-style-of-james-christensen-large.jpg" alt="The picture of Hogwart's headmaster - Albus Dumbledore">
                </p>
                <h1>
                <?= $trad['section2-index']['article2']['title'] ?>
                </h1>
                <p>
                <?= $trad['section2-index']['article2']['description'] ?>
                </p>
                <a href="#"><?= $trad['section2-index']['article2']['link'] ?></a>
            </article>
            <article>
                <p>
                <img src="./assets/img/hogwarts-wall-small.png" alt="A wall covered with school rules for the new semester">
                </p>
                <h1>
                <?= $trad['section2-index']['article3']['title'] ?>
                </h1>
                <p>
                    <?= $trad['section2-index']['article3']['description'] ?>
                </p>
                <a href="#"><?= $trad['section2-index']['article3']['link'] ?></a>
            </article>
        </section>


        <section>
            <article>
                <header>
                    <h1><?= $trad['section3-index']['title'] ?></h1>
                    <span></span>
                    <p> 
                    <?= $trad['section3-index']['description'] ?>
                    </p>
                    <a href="registration.php"><?= $trad['section3-index']['link'] ?></a>
                    <span></span>
                </header>
                <aside>
                <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2019/02/23-The-Triwizard-Tournament.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5" alt="The Holy Grail of the Triwizard Tournament">
                <ul>
                        <li><span id="day">00</span><?= $trad['section3-index']['day'] ?></li>
                        <li><span id="hour">00</span><?= $trad['section3-index']['hour'] ?></li>
                        <li>:</li>
                        <li><span id="minute">00</span><?= $trad['section3-index']['minute'] ?></li>
                        <li>:</li>
                        <li><span id="second">00</span><?= $trad['section3-index']['second'] ?></li>
                </ul>
                </aside>

            </article>
            <section></section>
            <section></section>
        </section>


        <section>
            <header>
                <h1><?= $trad['section4-index']['title'] ?></h1>
            </header>
            <section>
                <article>
                    <img src="https://images.ctfassets.net/usf1vwtuqyxm/vz91ri8UDJH8IhEE5Ez0U/10f4f2437832409e00e8c78d9a1d59c4/the-philosophers-stone_1_1800x1248.png?h=832&w=1200&fit=pad&fm=webp" alt="The picture of the Philosophers stone">
                    <aside>
                        <h3><?= $trad['section4-index']['article1']['title'] ?></h3>
                        <span></span>
                        <p>
                        <?= $trad['section4-index']['article1']['description'] ?>
                        </p>
                        <a href="#"><?= $trad['section4-index']['article1']['link'] ?></a>
                        <span></span>
                    </aside>
                </article>

                <article>
                    <img src="https://blenderartists.org/uploads/default/original/4X/a/8/0/a809928deca973a233636d4de256b69577bc09aa.png" alt="The picture of the corner of the Chamber of Secrets">
                    <aside>
                        <h3><?= $trad['section4-index']['article2']['title'] ?></h3>
                        <span></span>
                        <p>
                        <?= $trad['section4-index']['article2']['description'] ?>
                        </p>
                        <a href="#"><?= $trad['section4-index']['article2']['link'] ?></a>
                        <span></span>
                    </aside>
                </article>

                <article>
                    <img src="https://wallpapers.com/images/high/queen-elizabeth-s-wedding-crown-aqhu0dx9pik33et3.webp" alt="The picture of the legendary unicorn crown">
                    <aside>
                        <h3><?= $trad['section4-index']['article3']['title'] ?></h3>
                        <span></span>
                        <p>
                        <?= $trad['section4-index']['article3']['description'] ?>
                        </p>
                        <a href="#"><?= $trad['section4-index']['article3']['link'] ?></a>
                        <span></span>
                    </aside>
                </article>

                <a onclick="plusSlides(1)">❯</a>
            </section>

            <section>
                <span class=" active" onclick="currentSlide(1)"></span>
                <span class="" onclick="currentSlide(2)"></span>
                <span class="" onclick="currentSlide(3)"></span>
            </section>

        </section>
    </main>

    <?php
    require_once 'assets/template/footer.php';
    ?>

           
   </body>
           
</html>