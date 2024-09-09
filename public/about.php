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
        <h1>Ervaring</h1>
        <p>Hallo, mijn naam is Lars Swagerman en ik ben <?php echo (new DateTime('2006-08-08'))->diff(new DateTime())->y; ?> jaar oud. Ik heb ervaring in HTML, CSS, JavaScript, PHP, SQL, Python, Laravel en WordPress</p>
        <div class="main__divider">skills</div>
        <section class="skills__lists">
            <ul class="skill__list">
                <h2 class="list__title">Hard skills</h2>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
            </ul>
            <ul class="skill__list">
                <h2 class="list__title">Soft skills</h2>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
                <li class="list__item">test</li>
            </ul>
        </section>
    </main>
    <?php makeFooter()?>
</body>
</html>