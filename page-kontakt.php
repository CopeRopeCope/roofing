<?php
/**
 * Kontakt Page
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

 	<!-- Contact Hero -->

	<section id="contact" class="contact-page">

		<div class="container">

			<div class="section-heading">

				<span class="section-tag">
					Kontakt
				</span>

				<h1 class="section-title">
					Zatražite ponudu
				</h1>

				<p class="section-description">
					Pošaljite nam upit i odgovorićemo vam u najkraćem mogućem roku.
				</p>

			</div>

			<div class="contact-page__grid">

				<div class="contact-page__form">

					<?php
					echo do_shortcode( '[contact-form-7 id="0cd0dc2" title="Kontakt forma"]' );
					?>

				</div>

				<div class="contact-page__info">

					<div class="contact-info">

						<div class="contact-info__icon">

							<img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/phone.svg"
								alt=""
								aria-hidden="true">

						</div>

						<div>

							<h3>Telefon</h3>

							<a href="tel:+381653305499">

								065 330 5499

							</a>

						</div>

					</div>

					<div class="contact-info">

						<div class="contact-info__icon">

							<img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/email.svg"
								alt=""
								aria-hidden="true">

						</div>

						<div>

							<h3>Email</h3>

							<a href="mailto:info@limplus.rs">

								info@limplus.rs

							</a>

						</div>

					</div>

					<div class="contact-info">

						<div class="contact-info__icon">

							<img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/location.svg"
								alt=""
								aria-hidden="true">

						</div>

						<div>

							<h3>Područje rada</h3>

							<p>

								Beograd, Novi Beograd, Zemun,
								Pančevo i cela Srbija po dogovoru.

							</p>

						</div>

					</div>

					<div class="contact-info">

						<div class="contact-info__icon">

							<img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/clock.svg"
								alt=""
								aria-hidden="true">

						</div>

						<div>

							<h3>Radno vreme</h3>

							<p>

								Ponedeljak – Petak<br>
								08:00 – 17:00

							</p>

						</div>

					</div>

				</div>
				
				<div class="contact-note">

					<h3>

						Besplatan izlazak na teren

					</h3>

					<p>

						Dolazimo na vašu adresu,
						vršimo merenje i pripremamo ponudu
						bez ikakve obaveze.

					</p>

				</div>

			</div>

		</div>

	</section>

</main>

<?php get_footer(); ?>