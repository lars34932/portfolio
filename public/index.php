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
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-index.css">
    <title>Portfolio</title>
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
                <p class="main__text">Hallo, mijn naam is Lars Swagerman en ik ben <?php echo (new DateTime('2006-08-08'))->diff(new DateTime())->y;?> jaar oud. Op dit moment volg ik de opleiding Software Development aan het Mediacollege Amsterdam. Ik hou van problemen oplossen en mijn interesse ligt voornamelijk bij back-end ontwikkeling en JavaScript.</p>
                <button class="main__button">Download CV  <i class="fa-solid fa-download"></i></button>
            </div>
            <div class="main__div">
                <img src="" alt="" class="main__img">
            </div>
        </section>
        <div class="main__divider">Projects</div>
        <section class="main__projects">
            <ul class="projects">
                <?php makeCards()?>
            </ul>
            <div class="projects__div">
                <p class="projects__text">Click here for more projects:</p>
                <a class="projects__link" href="projects.php"><button class="projects__button">More projects  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button></a>
            </div>
        </section>
        <div class="main__divider">about me</div>
        <section class="main__about">
            <h2 class="about__title">Test</h2>
            <p class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere eos sit dicta, ullam asperiores labore illo aperiam, quasi animi magnam omnis. Sunt asperiores libero quibusdam, ullam maiores minima omnis reprehenderit.
            In quam quis incidunt libero aperiam culpa sunt perferendis officia neque excepturi possimus reprehenderit, rem ab aliquam eaque labore at nisi, quia magnam accusantium. Facere dignissimos similique vitae quis laboriosam?</p>
            <a class="contact__link" href="about.php"><button class="about__button">Read more  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button></a>
        </section>
    </main>
    <?php makeFooter()?>
</body>
</html>