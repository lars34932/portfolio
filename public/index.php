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
                <h1 class="main__title">Lars Swagerman</h1>
                <h1 class="main__title">Web developer</h1>
                </div>
                <p class="main__text">Hallo, mijn naam is Lars Swagerman en ik ben <?php echo (new DateTime('2006-08-08'))->diff(new DateTime())->y; ?> jaar oud. Ik ben op zoek naar een stage in web development, met een voorkeur voor backend development. Op dit portfolio vind je enkele van mijn projecten. Deze projecten heb ik ontwikkeld om te leren en te testen. Hierdoor kunnen sommige van de projecten fouten bevatten.</p>
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
            <h2 class="about__title">Stage voorkeuren</h2>
            <p class="about__text">Zoals ik al heb vernoemd ben ik voornamlijk opzoek naar een stage in backend development. Ik vind het leuk om problemen op te lossen, waardoor ik liever backend doe als frontend. Ik vind het fijn om in een team te werken, en ik leer snel nieuwe talen en technieken. Tijdens mijn stage wil ik mijn vaardigheden op het gebied van backend development verder ontwikkelen. Ik sta altijd open om nieuwe dingen te leren en kijk uit naar de kans om mijn bijdrage te leveren aan een team. Wil je meer te weten komen over mijn ervaringen en vaardigheden? Klik dan op de knop hieronder.</p>
            <a class="contact__link" href="about.php"><button class="about__button">Lees meer  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button></a>
        </section>
    </main>
    <?php makeFooter()?>
</body>
</html>