<?php
function makeHeader() {
    echo '<header class="header">
        <img onclick="location.href = `/index.php`" src="assets/img/logo.webp" alt="" class="header__logo">
        <div class="header__div">
            <a href="projects.php" class="header__link">projects</a>
            <a href="about.php" class="header__link">about me</a>
            <a href="#" class="header__link">contact</a>
            <a href="blog.php" class="header__link">blog</a>
        </div>
    </header>
    ';
}