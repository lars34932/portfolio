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
                <p class="main__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates impedit unde doloribus voluptatibus dignissimos accusantium rerum rem. Est itaque eligendi officia quos voluptatem incidunt eveniet reiciendis mollitia, praesentium quam repellat?</p>
                <button class="main__button">Download CV  <i class="fa-solid fa-download"></i></button>
            </div>
            <div class="main__div">
                <img src="" alt="" class="main__img">
            </div>
        </section>
        <div class="main__divider">Projects</div>
        <section class="main__projects">
            <ul class="projects__cards">
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
            </ul>
            <div class="projects__div">
                <p class="projects__text">Click here for more projects:</p>
                <button class="projects__button">More projects  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
            </div>
        </section>
        <div class="main__divider">about me</div>
        <section class="main__about">
            <h2 class="about__title">Test</h2>
            <p class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere eos sit dicta, ullam asperiores labore illo aperiam, quasi animi magnam omnis. Sunt asperiores libero quibusdam, ullam maiores minima omnis reprehenderit.
            In quam quis incidunt libero aperiam culpa sunt perferendis officia neque excepturi possimus reprehenderit, rem ab aliquam eaque labore at nisi, quia magnam accusantium. Facere dignissimos similique vitae quis laboriosam?</p>
            <button class="about__button">Read more  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
        </section>
        <div class="main__divider">contact</div>
    </main>
    <?php makeFooter()?>
</body>
</html>