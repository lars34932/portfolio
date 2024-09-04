<?php
function makeFooter() {
    echo '
    <footer class="footer">
        <div class="main__divider">contact</div>
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
            <p class="footer__text">&copy; ' . date("Y") . ' All Rights Reserved by Lars Swagerman.</p>
        </section>
    </footer>';
}