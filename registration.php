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
       <link rel="stylesheet" href="./assets/css/style_reg.css">
       <script src="./assets/js/reg.js" defer></script> </head>
           
   <body>

   <?php
    require_once './assets/template/nav.php';
    ?>

    <main>
        <section>
            <header>
                <h1><?= $trad['header-reg']['title'] ?></h1>
                <aside>                
                <p><?= $trad['header-reg']['para1'] ?></p>
                <p><?= $trad['header-reg']['para2'] ?></p>
                </aside>
            </header>
            <article>
            <video loop autoplay muted>
                <source src="./assets/video/nominated.mp4" type="video/mp4">
            </video>
            </article>
  
            <p></p>
         


        </section>
        <section>
            <form action="./assets/php/form.php" method="post">
                <legend><h2><?= $trad['form-reg']['formTitle'] ?></h2></legend>
                <label for="firstname"><?= $trad['form-reg']['firstname'] ?></label>
                <input type="text" id="firstname" name="firstname" required>
                <label for="lastname"><?= $trad['form-reg']['lastname'] ?></label>
                <input type="text" id="lastname" name="lastname" required>

                <label><?= $trad['form-reg']['house'] ?></label>
                <section>
                    <input type="radio" value="Gryffindor" id="radio-gry" name="house" class="house" required>
                    <label for="radio-gry">Gryffindor</label>
                    <input type="radio" value="Hufflepuff" id="radio-huf" name="house" class="house" required>
                    <label for="radio-huf">Hufflepuff</label>
                    <input type="radio" value="Ravenclaw" id="radio-rav" name="house" class="house" required>
                    <label for="radio-rav">Ravenclaw</label>
                    <input type="radio" value="Slytherin" id="radio-sly" name="house" class="house" required>
                    <label for="radio-sly">Slytherin</label>
                </section>

                <label for="grade"><?= $trad['form-reg']['grade'] ?></label>
                <select id="grade" name="grade" required>
                 <option value=""><?= $trad['form-reg']['select'] ?></option>
                  <option value="4"><?= $trad['form-reg']['grade4'] ?></option>
                  <option value="5"><?= $trad['form-reg']['grade5'] ?></option>
                  <option value="6"><?= $trad['form-reg']['grade6'] ?></option>
                  <option value="7"><?= $trad['form-reg']['finalyear'] ?></option>
                </select>
                
                <label for="message"><?= $trad['form-reg']['message'] ?></label>
                <textarea name="message" id="message" placeholder="<?= $trad['form-reg']['indication'] ?>" required></textarea>

                <button type="submit"><?= $trad['form-reg']['submit'] ?></button>
            </form>
        </section>
        <section>
        <button><?= $trad['form-reg']['seeCompetitors'] ?></button>
        <section></section>

        </section>



    </main>
           
    <?php
    require_once 'assets/template/footer.php';
    ?>
   </body>  
</html>