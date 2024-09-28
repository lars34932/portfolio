const menuElement = document.getElementById("js--menu");

function menu() {
    menuElement.style.display = "flex"
    document.body.style.overflow = 'hidden';
}

function noMenu() {
    menuElement.style.display = "none"
    document.body.style.overflow = '';
}