<?php 
function makeMenu() {
    echo '
    <div class="menu" id="js--menu">
        <a onclick="noMenu()" href="/" class="header__link">home</a>
        <a onclick="noMenu()" href="projects.php" class="header__link">projecten</a>
        <a onclick="noMenu()" href="about.php" class="header__link">over mij</a>
        <a onclick="noMenu()" href="#contact" class="header__link">contact</a>
        <a onclick="alert(`nog niet af`); noMenu()" href="" class="header__link">blog</a>
    </div>';
}