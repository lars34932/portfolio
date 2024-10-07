<?php
require_once("assets/php/header.php");
require_once("assets/php/footer.php");
require_once("assets/php/project.php");
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
    <link rel="stylesheet" href="assets/css/style-project.css">
    <script src="assets/js/filter.js" defer></script>
    <script src="assets/js/menu.js" defer></script>
    <title>Projecten</title>
</head>
<body>
    <?php makeHeader()?>
    <main class="main__projects">
        <ul class="filter">
            <button id="phpButton" class="filter__button" onclick="filter('php')">php</button>
            <button id="cssButton" class="filter__button" onclick="filter('css')">css</button>
            <button id="jsButton" class="filter__button" onclick="filter('js')">js</button>
            <button id="sqlButton" class="filter__button" onclick="filter('sql')">sql</button>
            <button id="pythonButton" class="filter__button" onclick="filter('python')">python</button>
            <button id="wordpressButton" class="filter__button" onclick="filter('wordpress')">wordpress</button>
        </ul>
        <ul class="projects">
            <?php 
                makeCards();
            ?>
        </ul>
    </main>
    <?php makeFooter()?>
    <?php makeMenu()?>
</body>
</html>