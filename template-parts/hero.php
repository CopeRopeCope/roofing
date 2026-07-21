<?php
/**
 * Hero Section
 *
 * @package ALS_Roofing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_image = get_template_directory_uri() . '/assets/images/hero/hero-placeholder.jpg';
?>

<section class="hero">

    <div class="hero__background">

        <img
            src="<?php echo esc_url( $hero_image ); ?>"
            alt="ALS Roofing Pavlović"
            class="hero__image">

        <div class="hero__overlay"></div>

    </div>

    <div class="container">

        <div class="hero__content">

            <span class="hero__eyebrow">

                Profesionalni limarski radovi

            </span>

            <h1 class="hero__title">

                Limarski radovi <br> koji traju godinama.

            </h1>

            <p class="hero__description">

                Profesionalna izrada i montaža limenih krovova,
                oluka, opšivki, vetar lajsni i svih vrsta
                limarskih radova na teritoriji cele Srbije.

            </p>

            <ul class="hero__features">

                <li>
                    <span class="hero__check">✓</span>
                    Limeni krovovi
                </li>

                <li>
                    <span class="hero__check">✓</span>
                    Oluci i vertikale
                </li>

                <li>
                    <span class="hero__check">✓</span>
                    Opšivke i dimnjaci
                </li>

                <li>
                    <span class="hero__check">✓</span>
                    Garancija na izvedene radove
                </li>

            </ul>

            <div class="hero__buttons">

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"
                   class="btn btn--primary">

                    Zatražite ponudu

                </a>

                <a href="tel:+381653305499"
                   class="btn btn--secondary">

                    Pozovite odmah

                </a>

            </div>

        </div>

    </div>

    <div class="hero__stats">

        <div class="container">

            <div class="hero__stats-grid">

                <div class="hero__stat">

                    <span class="hero__number">

                        5+

                    </span>

                    <span class="hero__label">

                        Godina iskustva

                    </span>

                </div>

                <div class="hero__stat">

                    <span class="hero__number">

                        100+

                    </span>

                    <span class="hero__label">

                        Završenih projekata

                    </span>

                </div>

                <div class="hero__stat">

                    <span class="hero__number">

                        Srbija

                    </span>

                    <span class="hero__label">

                        Radimo širom zemlje

                    </span>

                </div>

                <div class="hero__stat">

                    <span class="hero__number">

                        100%

                    </span>

                    <span class="hero__label">

                        Posvećenost kvalitetu

                    </span>

                </div>

            </div>

        </div>

    </div>

</section>