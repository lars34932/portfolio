<?php
function makeHeader() {
    echo '<header class="header">
        <img onclick="location.href = `/`" src="assets/img/logo.webp" alt="" class="header__logo">
        <div class="header__div">
            <a href="projects.php" class="header__link">projecten</a>
            <a href="about.php" class="header__link">over mij</a>
            <a href="#contact" class="header__link">contact</a>
            <a onclick="alert(`nog niet af`)" href="" class="header__link header__blog">blog</a>
        </div>
        <i onclick="menu()" class="burger__menu fa-solid fa-bars"></i>
    </header>
    ';
}