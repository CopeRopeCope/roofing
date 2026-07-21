<?php
/**
 * About Section
 *
 * @package ALS_Roofing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$about_image = get_template_directory_uri() . '/assets/images/about/merdevine.webp';
?>

<section class="about">

	<div class="container">

		<div class="about__wrapper">

			<div class="about__image">

				<img
					src="<?php echo esc_url( $about_image ); ?>"
					alt="Lim+ Pavlović">

			</div>

			<div class="about__content">

				<span class="section-tag">
					O nama
				</span>

				<h2>
					Pouzdan partner za sve vrste limarskih radova
				</h2>

				<p>
					Lim+ Pavlović pruža profesionalne limarske
					usluge već više od 5 godina. Naš cilj je da svaki
					projekat bude izveden kvalitetno, precizno i u
					dogovorenom roku.
				</p>

				<ul class="about__list">

					<li>Kvalitetni materijali</li>

					<li>Profesionalna montaža</li>

					<li>Poštovanje dogovorenih rokova</li>

					<li>Garancija na izvedene radove</li>

				</ul>

			</div>

		</div>

	</div>

</section>