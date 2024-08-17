<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Portfolio</title>
</head>
<body>
    <header class="header">
        <img src="assets/img/logo.webp" alt="" class="header__logo">
        <div class="header__div">
            <a href="" class="header__link">projects</a>
            <a href="" class="header__link">about me</a>
            <a href="" class="header__link">contact</a>
        </div>
    </header>
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
                    <button class="project__button">Project 1  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
                <li class="projects__card">
                    <button class="project__button">Project 2  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
                <li class="projects__card">
                    <button class="project__button">Project 3  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
                <li class="projects__card">
                    <button class="project__button">Project 4  <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
                </li>
            </ul>
        </section>
        <div class="main__divider">about me</div>
        <section class="main__about">
            <h2 class="about__title">Test</h2>
            <p class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere eos sit dicta, ullam asperiores labore illo aperiam, quasi animi magnam omnis. Sunt asperiores libero quibusdam, ullam maiores minima omnis reprehenderit.
            In quam quis incidunt libero aperiam culpa sunt perferendis officia neque excepturi possimus reprehenderit, rem ab aliquam eaque labore at nisi, quia magnam accusantium. Facere dignissimos similique vitae quis laboriosam?</p>
        </section>
        <div class="main__divider">contact</div>
    </main>
    <footer class="footer">
        <section class="footer__contact">
            <div class="contact__div contact__div1">
                <div class="contacts">
                    <i class="fa-regular fa-envelope contacts__icon"></i>
                    <p class="contacts__text">34932@ma-web.nl</p>
                </div>
                <div class="contacts">
                    <i class="fa-solid fa-phone contacts__icon"></i>
                    <p class="contacts__text">+31 6 00000000</p>
                </div>
            </div>
            <div class="contact__div contact__div2">
                <a class="contact__icon"><i class="fa-brands fa-github"></i></a>
                <a class="contact__icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </section>
        <section class="footer__copyright">
            <img class="footer__img" src="assets/img/logo.webp" alt="">
            <p class="footer__text">&copy; <?php echo date("Y");?> All Rights Reserved by Lars Swagerman.</p>
        </section>
    </footer>
</body>
</html>