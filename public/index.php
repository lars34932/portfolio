<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <i class="header__icon fa-solid fa-house"></i>
        <i class="header__icon fa-solid fa-code"></i>
        <i class="header__icon fa-solid fa-user"></i>
    </header>
    <section class="info__section">
        <h1 class="section__title">Lars Swagerman</h1>
        <h2 class="section__text">Hallo, ik ben Lars Swagerman, een programmeur in opleiding aan het Mediacollege Amsterdam en zit momenteel in het tweede jaar. Met deze knop kun je enkele van mijn projecten bekijken.</h2>
        <a href="projecten.php">
            <button class="section__button">Projecten</button>
        </a>
    </section>
    <footer class="footer">

    </footer>
    <div class="pattern">
        <div class="container">
            <?php
            $amount = 300;
            while ($amount > 0) {
                echo "<div></div>";
                $amount = $amount - 1;
            }
            ?>
        </div>
    </div>
</body>
</html>