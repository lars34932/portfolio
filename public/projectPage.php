<?php
require_once("assets/php/header.php");
require_once("assets/php/footer.php");
require_once("/var/www/html/source/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-page.css">
    <title>Lars Swagerman</title>
</head>
<body>
    <?php makeHeader();?>
        
    <?php 
    $name = isset($_GET['name']) ? $_GET['name'] : '';

    if (!empty($name)) {
       $pdo = db_connect();
       $stmt = $pdo->prepare('SELECT * FROM Projects WHERE name = ?');
       $stmt->execute([$name]);
       $project = $stmt->fetch(PDO::FETCH_ASSOC);
       echo '
       <main class="main">
           <img class="main__img" src="' . $project['image'] .'" alt="">
           <section class="info__section">
               <div class="info__div">
                   <h1 class="info__title">' . $project['name'] . '</h1>
                   <p class="info__text">' . $project['infoText'] . '</p>
               </div>
               <ul class="info__list">
                   <li class="list__item">
                       <p class="item__title">categorie</p>
                       <p class="item__text">' . $project['categoryText'] . '</p>
                   </li>
                   <li class="list__item">
                       <p class="item__title">opdracht gever</p>
                       <p class="item__text">' . $project['clientText'] . '</p>
                   </li>
                   <li class="list__item">
                       <p class="item__title">datum</p>
                       <p class="item__text">' . $project['date'] . '</p>
                   </li>
                   <li class="list__item">
                       <p class="item__title">design</p>
                       <p class="item__text">' . $project['designText'] . '</p>
                   </li>
               </ul>
           </section>
           <div class="links__div">
                <button onclick="location.href = ' . $project['liveLink'] . '" class="live__button">Live preview<i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                <a href="' . $project['gitLink'] . '" class="contact__icon"><i class="fa-brands fa-github"></i></a>
           </div>
           <h2 class="about__title">beschrijving</h2>
           <p class="about__text">' . $project['bigText'] . '</p>
       </main>';
    } else {
        echo '<p>Project could not be found.</p>';
    }
    ?>
    <?php makeFooter();?>
</body>
</html>