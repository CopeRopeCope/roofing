<?php
/**
 * Footer template.
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer class="footer">

    <div class="container">

        <div class="footer__grid">

            <div class="footer__column">

                <h3 class="footer__logo">

                    Lim<span>+</span><br>

                    <small>Pavlović</small>

                </h3>

                <p class="footer__text">

                    Profesionalni limarski radovi,
                    krovovi, oluci i fasade.

                    Radimo na teritoriji cele Srbije.

                </p>

            </div>

            <div class="footer__column">

                <h4>

                    Naše usluge

                </h4>

                <?php

                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer__links',
                        'fallback_cb'    => false,
                    )
                );

                ?>

            </div>

            <div class="footer__column">

                <h4>

                    Kontakt

                </h4>

                <ul class="footer__contact">

                    <li>

                        <a href="tel:+381653305499">

                            065 330 5499

                        </a>

                    </li>

                    <li>

                        <a href="mailto:info@limplus.rs">

                            info@limplus.rs

                        </a>

                    </li>

                    <li>📍 Beograd, Srbija</li>

                </ul>

            </div>

        </div>

        <div class="footer__bottom">

            <p>

                &copy;
                <?php echo esc_html( wp_date( 'Y' ) ); ?>

                Lim+ Pavlović.

                Sva prava zadržana.

            </p>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>