<?php
function makeHeader() {
    echo '<header class="header">
        <img onclick="location.href = `/index.php`" src="assets/img/logo.webp" alt="" class="header__logo">
        <div class="header__div">
            <a href="projects.php" class="header__link">projecten</a>
            <a href="about.php" class="header__link">over mij</a>
            <a href="#contact" class="header__link">contact</a>
            <a href="/blog" class="header__link">blog</a>
        </div>
    </header>
    ';
}