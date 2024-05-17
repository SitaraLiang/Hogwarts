<?php
$lang = 'fr';

if (isset($_GET['lang'])) {
    if ($_GET['lang'] === 'en' || $_GET['lang'] === 'fr') {
        setcookie(
            'lang',
            $_GET['lang'],
            time() + 60 * 60 * 24 * 365,
            '',
            '',
            true,
            true,
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
       <title>Registration</title>
       <link rel="stylesheet" href="./assets/css/template.css">
       <link rel="stylesheet" href="./assets/css/keyframes.css">
       <link rel="stylesheet" href="./assets/css/style_cur.css">
       <script src="./assets/js/cur.js" defer></script> </head>
    </head>
           
   <body>
     <?php
    require_once './assets/template/nav.php';
    ?>

    <main>
    <header>
        <h1><?= $trad['cur']['search'] ?></h1>
        <form action="api/subjects.php" method="get">

        <input type="search" name="q" id="q" placeholder="<?= $trad['cur']['search'] ?>">
            <button type="submit" onsubmit="return false;">🔍</button>
        
        </form>
    
    </header>
    <section>
        <button onclick="loadSubjects(1)"><?= $trad['cur']['allcourse'] ?></button>
        <button onclick="loadSubjects(2)"><?= $trad['cur']['owl'] ?></button>
        <button onclick="loadSubjects(3)"><?= $trad['cur']['newt'] ?></button>
    </section>
    <section style="display: none;">
    </section>
    </main>


<?php
    require_once './assets/template/footer.php';

    ?>
    </body>
</html>