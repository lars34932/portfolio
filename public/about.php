<?php
require_once("assets/php/header.php");
require_once("assets/php/footer.php");
require_once("assets/php/menu.php");
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
    <script src="assets/js/menu.js" defer></script>
    <title>Over mij</title>
</head>
<body>
    <?php makeHeader()?>
    <main class="main">
        <h1 class="main__title">Ervaring</h1>
        <p class="main__text">Van 2018 tot 2022 heb ik de MAVO/VMBO-TL afgerond aan het Tabor College Oscar Romero. Momenteel volg ik de opleiding Software Development (MBO4) aan het Mediacollege Amsterdam. Tijdens deze opleiding heb ik brede ervaring opgedaan met verschillende programmeertalen en technologieën, waaronder JavaScript, PHP, SQL, Laravel, WordPress en ook dingen zoals arduino. Daarnaast heb ik door een persoonlijk project ook gebruikt gemaakt met Node.js. Hieronder vind je een overzicht van mijn skills.</p>
        <div class="main__divider">skills</div>
        <ul class="skills__list">
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-js"></i>
                <p class="skill__procent">70%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-php"></i>
                <p class="skill__procent">75%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-solid fa-database"></i>
                <p class="skill__procent">65%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-python"></i>
                <p class="skill__procent">40%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-laravel"></i>
                <p class="skill__procent">15%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-wordpress"></i>
                <p class="skill__procent">30%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-react"></i>
                <p class="skill__procent">10%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-css3-alt"></i>
                <p class="skill__procent">50%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-html5"></i>
                <p class="skill__procent">80%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-solid fa-c"></i>
                <p class="skill__procent">15%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-sass"></i>
                <p class="skill__procent">30%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-node-js"></i>
                <p class="skill__procent">35%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-github"></i>
                <p class="skill__procent">65%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-trello"></i>
                <p class="skill__procent">70%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-docker"></i>
                <p class="skill__procent">30%</p>
            </li>
            
            <li class="skills__item">
                <i class="skills__icon fa-brands fa-raspberry-pi"></i>
                <p class="skill__procent">5%</p>
            </li>
        </ul>
        <section class="skills__lists">
            <ul class="skill__list">
                <h2 class="list__title">Soft skills:</h2>
                <li class="list__item">Teamspeler</li>
                <li class="list__item">Goede communicatie</li>
                <li class="list__item">Deadline's halen</li>
                <li class="list__item">Probleemoplossend</li>
                <li class="list__item">Flexibel</li>
                <li class="list__item">Samenwerkend</li>
                <li class="list__item">Leergierig</li>
                <li class="list__item">Stressbestendig</li>
                <li class="list__item">Aanpassingsvermogen</li>
                <li class="list__item">Kritisch denken</li>
            </ul>
        </section>
    </main>
    <?php makeFooter()?>
    <?php makeMenu()?>
</body>
</html>