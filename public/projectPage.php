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
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-page.css">
    <title>Portfolio</title>
</head>
<body>
    <?php makeHeader();?>
    <main class="main">
        <img class="main__img" src="assets/img/test.png" alt="">
        <section class="info__section">
            <div class="info__div">
                <h1 class="info__title">Titel</h1>
                <p class="info__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus cupiditate optio illo nisi neque rem qui obcaecati iusto dolorum earum consequuntur inventore aperiam quia fuga, labore vero numquam mollitia cumque?</p>
                
            </div>
            <ul class="info__list">
                <li class="list__item">
                    <p class="item__title">test</p>
                    <p class="item__text">test</p>
                </li>
                <li class="list__item">
                    <p class="item__title">test</p>
                    <p class="item__text">test</p>
                </li>
                <li class="list__item">
                    <p class="item__title">test</p>
                    <p class="item__text">test</p>
                </li>
                <li class="list__item">
                    <p class="item__title">test</p>
                    <p class="item__text">test</p>
                </li>
            </ul>
        </section>
        <button class="live__button">Live preview</button>
        <h2 class="about__title">beschrijving</h2>
        <p class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sint amet perspiciatis incidunt. Sit eos laborum voluptatum inventore veniam ipsam quibusdam sunt corporis ex reprehenderit temporibus assumenda autem, harum at?</p>
    </main>
    <?php 
    // $name = isset($_GET['name']) ? $_GET['name'] : '';

    // if (!empty($name)) {
    //     $pdo = db_connect();
    //     $stmt = $pdo->prepare('SELECT * FROM Projects WHERE name = ?');
    //     $stmt->execute([$name]);
    //     $project = $stmt->fetch(PDO::FETCH_ASSOC);
    //     echo $project['name'];
    // } else {
    //     echo '<p>Project could not be found.</p>';
    //}
    ?>
    <?php makeFooter();?>
</body>
</html>