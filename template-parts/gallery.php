<?php
/**
 * Gallery Section
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="gallery" class="section gallery">

    <div class="container">

        <div class="section-heading">

            <span class="section-tag">
                Naši radovi
            </span>

            <h2 class="section-title">
                Pogledajte neke od naših projekata
            </h2>

            <p class="section-description">
                Krovovi, oluci, fasade i limarski radovi izvedeni širom Srbije.
            </p>

        </div>

        <div class="gallery__grid">

            <div class="gallery__item">
                <img src="<?php echo esc_url( als_asset( 'images/gallery/LimPlus_krov2.webp' ) ); ?>" alt="Limeni krov">
            </div>

            <div class="gallery__item">
                <img src="<?php echo esc_url( als_asset( 'images/gallery/LimPlus_nadstresnica.webp' ) ); ?>" alt="Montaža nadstresnice">
            </div>

            <div class="gallery__item">
                <img src="<?php echo esc_url( als_asset( 'images/gallery/LimPlus_paneli2.webp' ) ); ?>" alt="Zidni paneli
                ">
            </div>

            <div class="gallery__item">
                <img src="<?php echo esc_url( als_asset( 'images/gallery/LimPlus_Odzak.webp' ) ); ?>" alt="Krov">
            </div>

            <div class="gallery__item">
                <img src="<?php echo esc_url( als_asset( 'images/gallery/merdevine.webp' ) ); ?>" alt="Oluci">
            </div>

            <div class="gallery__item">
                <img src="<?php echo esc_url( als_asset( 'images/gallery/LimPlus_fasada.webp' ) ); ?>" alt="Fasada">
            </div>

        </div>

    </div>

</section>

<div class="gallery-lightbox" id="gallery-lightbox">

    <button
        class="gallery-lightbox__close"
        id="gallery-close"
        aria-label="Zatvori galeriju">

        &times;

    </button>

    <button
    class="gallery-lightbox__arrow gallery-lightbox__arrow--prev"
    id="gallery-prev"
    aria-label="Prethodna slika">

    &#10094;

    </button>

    <img
        class="gallery-lightbox__image"
        id="gallery-image"
        src=""
        alt="">

    <button
    class="gallery-lightbox__arrow gallery-lightbox__arrow--next"
    id="gallery-next"
    aria-label="Sledeća slika">

    &#10095;

    </button>

</div>