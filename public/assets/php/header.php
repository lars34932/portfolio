<?php
function makeHeader() {
    echo '<header class="header">
        <img src="assets/img/logo.webp" alt="" class="header__logo">
        <div class="header__div">
            <a href="index.php" class="header__link">home</a>
            <a href="projects.php" class="header__link">projects</a>
            <a href="about.php" class="header__link">about me</a>
            <a href="#" class="header__link">contact</a>
        </div>
    </header>
    ';
}