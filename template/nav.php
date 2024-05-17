<nav>
        <section>
            <img src="./assets/img/Hogwarts_Logo.png" alt="The official school logo of Hogwarts">
            <section>
                <a href="index.php"><h2>Hogwarts</h2></a>
                <p><?= $trad['nav']['schoolname'] ?></p>
            </section>

        </section>
        <ul>
            <li><a href="#" onclick="openNav()">&#9776;<?= $trad['nav']['menu'] ?></a></li>
            <li>
                <a href="?lang=<?= $lang === 'fr' ? 'en' : 'fr' ?>">
                    <?= $trad['nav']['language'] ?>
                </a>
            </li>
        </ul>

        <!--nav > section:nth-child(3) -->
        <section>
            <a href="#" onclick="closeNav()">&times; </a>
            <section>
            <a href="#" onclick="openCatalog(1)"><?= $trad['nav']['academics'] ?></a>
            <a href="#" onclick="openCatalog(2)"><?= $trad['nav']['campus'] ?></a>
            <a href="#" onclick="openCatalog(3)"><?= $trad['nav']['library'] ?></a>
            <a href="#" onclick="openCatalog(4)"><?= $trad['nav']['studentlife'] ?></a>
            </section>
        <!-- Academics nav > section:nth-child(4)-->
        <section>
            <a href="#"><?= $trad['nav']['house'] ?></a>
            <a href="/curriculum.php"><?= $trad['nav']['curriculum'] ?></a>
            <a href="#"><?= $trad['nav']['faculty'] ?></a>
        </section>

        <!-- Campus nav > section:nth-child(5)-->
        <section>
            <a href="#"><?= $trad['nav']['history'] ?></a>
            <a href="#"><?= $trad['nav']['classroom'] ?></a>
            <a href="#"><?= $trad['nav']['castle'] ?></a>
        </section>

        <!-- Library nav > section:nth-child(6)-->
        <section>
            <a href="#"><?= $trad['nav']['libHogwarts'] ?></a>
            <a href="#"><?= $trad['nav']['libPotions'] ?></a>
            <a href="#"><?= $trad['nav']['libHouses'] ?></a>
        </section>

        <!-- Student Life nav > section:nth-child(7)-->
        <section>
            <a href="#"><?= $trad['nav']['activity'] ?></a>
            <a href="#"><?= $trad['nav']['association'] ?></a>
            <a href="#"><?= $trad['nav']['accomodation'] ?></a>
        </section>

        </section>



    </nav>



<script>
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 700) {
            document.querySelector('nav > ul > li:first-child > a').innerHTML = "&#9776;";
            document.querySelector('nav > ul > li:nth-child(2) > a').innerHTML = "<?= $lang === 'fr' ? '🇬🇧' : '🇫🇷' ?>";
        } else {
            document.querySelector('nav > ul > li:first-child > a').innerHTML = "&#9776;<?= $trad['nav']['menu'] ?>";
            document.querySelector('nav > ul > li:nth-child(2) > a').innerHTML = "<?= $trad['nav']['language'] ?> ";
        }
    });
</script>