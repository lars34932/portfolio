<?php
require_once("assets/php/header.php");
require_once("assets/php/footer.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-about.css">
    <title>Lars Swagerman</title>
</head>
<body>
    <?php makeHeader()?>
    <main class="main">
        <h1 class="main__title">Ervaring</h1>
        <p class="main__text">Hallo, mijn naam is Lars Swagerman en ik ben <?php echo (new DateTime('2006-08-08'))->diff(new DateTime())->y; ?> jaar oud. Ik kan goed omgaan in een teamverband en </p>
        <div class="main__divider">skills</div>
        <section class="skills__lists">
            <ul class="skill__list">
                <h2 class="list__title">Hard skills:</h2>
                <li class="list__item">JavaScript</li>
                <li class="list__item">PHP</li>
                <li class="list__item">CSS</li>
                <li class="list__item">HTML</li>
                <li class="list__item">MySQL</li>
                <li class="list__item">MariaDB</li>
                <li class="list__item">Python</li>
                <li class="list__item">SCSS</li>
                <li class="list__item">Laravel</li>
                <li class="list__item">WordPress</li>
                <li class="list__item">Trello</li>
                <li class="list__item">GitHub</li>
            </ul>
            <ul class="skill__list">
                <h2 class="list__title">Soft skills:</h2>
                <li class="list__item">Teamspeler</li>
                <li class="list__item">Goede communicatie</li>
                <li class="list__item">Deadline's halen</li>
                <li class="list__item">Probleemoplossend</li>
                <li class="list__item">Flexibel</li>
                <li class="list__item">Samenwerkend</li>
                <li class="list__item">Leergierig</li>
                <li class="list__item">Proactief</li>
                <li class="list__item">Stressbestendig</li>
                <li class="list__item">Aanpassingsvermogen</li>
                <li class="list__item">Kritisch denken</li>
                <li class="list__item">Besluitvaardig</li>
            </ul>
        </section>
    </main>
    <?php makeFooter()?>
</body>
</html>