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
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-project.css">
    <title>Portfolio</title>
</head>
<body>
    <?php makeHeader()?>
    <main class="main__projects">
        <div class="filter">
            <p class="filter__text">filter ></p>
            <ul class="filter__list">
                <li class="list__item">
                    <label for="php">php</label>
                    <input type="checkbox" id="php" name="php">
                </li>
            </ul>
        </div>
        <ul class="projects">
                <li class="projects__card">
                    <ul class="card__tags">
                        <li class="tags__tag php">php</li>
                        <li class="tags__tag css">css</li>
                        <li class="tags__tag js">js</li>
                        <li class="tags__tag sql">sql</li>
                        <li class="tags__tag python">python</li>
                        <li class="tags__tag wordpress">wordpress</li>
                    </ul>
                    <div class="card__div">
                        <img class="card__img" src="assets/img/test.png" alt="">
                        <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quae, voluptatum itaque dolorem adipisci mollitia porro quaerat odit numquam fuga incidunt corporis rerum illum natus consequuntur? Ipsam praesentium vitae magni!</p>
                    </div>
                    <button class="project__button">Project 1  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
                <li class="projects__card">
                    <ul class="card__tags">
                        <li class="tags__tag php">php</li>
                        <li class="tags__tag css">css</li>
                        <li class="tags__tag js">js</li>
                        <li class="tags__tag sql">sql</li>
                        <li class="tags__tag python">python</li>
                        <li class="tags__tag wordpress">wordpress</li>
                    </ul>
                    <div class="card__div">
                        <img class="card__img" src="assets/img/test.png" alt="">
                        <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quae, voluptatum itaque dolorem adipisci mollitia porro quaerat odit numquam fuga incidunt corporis rerum illum natus consequuntur? Ipsam praesentium vitae magni!</p>
                    </div>
                    <button class="project__button">Project 1  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
                <li class="projects__card">
                    <ul class="card__tags">
                        <li class="tags__tag php">php</li>
                        <li class="tags__tag css">css</li>
                        <li class="tags__tag js">js</li>
                        <li class="tags__tag sql">sql</li>
                        <li class="tags__tag python">python</li>
                        <li class="tags__tag wordpress">wordpress</li>
                    </ul>
                    <div class="card__div">
                        <img class="card__img" src="assets/img/test.png" alt="">
                        <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quae, voluptatum itaque dolorem adipisci mollitia porro quaerat odit numquam fuga incidunt corporis rerum illum natus consequuntur? Ipsam praesentium vitae magni!</p>
                    </div>
                    <button class="project__button">Project 1  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
                <li class="projects__card">
                    <ul class="card__tags">
                        <li class="tags__tag php">php</li>
                        <li class="tags__tag css">css</li>
                        <li class="tags__tag js">js</li>
                        <li class="tags__tag sql">sql</li>
                        <li class="tags__tag python">python</li>
                        <li class="tags__tag wordpress">wordpress</li>
                    </ul>
                    <div class="card__div">
                        <img class="card__img" src="assets/img/test.png" alt="">
                        <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quae, voluptatum itaque dolorem adipisci mollitia porro quaerat odit numquam fuga incidunt corporis rerum illum natus consequuntur? Ipsam praesentium vitae magni!</p>
                    </div>
                    <button class="project__button">Project 1  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
                <?php 
                
                ?>
            </ul>
    </main>
    <?php makeFooter()?>
</body>
</html>