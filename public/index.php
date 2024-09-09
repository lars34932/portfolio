<?php
require_once("assets/php/header.php");
require_once("assets/php/footer.php");
require_once("assets/php/project.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-index.css">
    <title>Lars Swagerman</title>
</head>
<body>
    <?php makeHeader()?>
    <main class="main">
        <section class="main__intro">
            <div class="main__div main__div1">
                <div>
                <h1 class="main__title">Backend developer +</h1>
                <h1 class="main__title">Web developer</h1>
                </div>
                <p class="main__text">Hallo, mijn naam is Lars Swagerman en ik ben <?php echo (new DateTime('2006-08-08'))->diff(new DateTime())->y; ?> jaar oud. Dit is mijn stageportfolio met veel van mijn projecten die ik heb gebruikt om te leren. Alle projecten hier zijn gericht op het opdoen van nieuwe vaardigheden en kennis dus er kunnen fouten tussen zitten.</p>
                <button class="main__button">Download CV  <i class="fa-solid fa-download"></i></button>
            </div>
            <div class="main__div">
                <img src="" alt="" class="main__img">
            </div>
        </section>
        <div class="main__divider">Projecten</div>
        <section class="main__projects">
            <ul class="projects">
                <?php makeCards()?>
            </ul>
            <div class="projects__div">
                <p class="projects__text">Bekijk hier meer projecten:</p>
                <a class="projects__link" href="projects.php"><button class="projects__button">Meer projecten  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button></a>
            </div>
        </section>
        <div class="main__divider">Over mij</div>
        <section class="main__about">
            <h2 class="about__title">Ervaring</h2>
            <p class="about__text">Van 2018 tot 2022 heb ik de MAVO/VMBO-TL afgerond aan het Tabor College Oscar Romero. Momenteel volg ik de opleiding Software Development (MBO4) aan het Mediacollege Amsterdam. Tijdens deze opleiding heb ik ervaring opgedaan met verschillende programmeertalen en technologieën zoals HTML, CSS, JavaScript, PHP, SQL, Python, Laravel en WordPress. Wil je meer weten over mijn vaardigheden en ervaring? Klik dan hieronder voor meer informatie.</p>
            <a class="contact__link" href="about.php"><button class="about__button">Lees meer  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button></a>
        </section>
    </main>
    <?php makeFooter()?>
</body>
</html>