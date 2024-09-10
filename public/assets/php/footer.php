<?php
function makeFooter() {
    echo '
    <footer class="footer">
        <div id="contact" class="main__divider">contact</div>
        <section class="footer__contact">
            <div class="contact__div contact__div1">
                <a href="mailto:34932@ma-web.nl" class="contacts">
                    <i class="fa-regular fa-envelope contacts__icon"></i>
                    <p class="contacts__text">34932@ma-web.nl</p>
                </a>
                <a href="tel:+31648904707" class="contacts">
                    <i class="fa-solid fa-phone contacts__icon"></i>
                    <p class="contacts__text">+31 6 48904707</p>
                </a>
            </div>
            <div class="contact__div contact__div2">
                <a href="https://github.com/lars34932" class="contact__icon"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/lars-swagerman-6ba413270/" class="contact__icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </section>
        <section class="footer__copyright">
            <img class="footer__img" src="assets/img/logo.webp" alt="">
            <p class="footer__text">&copy; ' . date("Y") . ' All Rights Reserved by Lars Swagerman.</p>
        </section>
    </footer>';
}