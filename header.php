<?php
/**
 * Header template.
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" 
	      content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header class="header" id="site-header">

	<div class="container">

		<div class="header__inner">

			<!-- Logo -->

			<div class="header__branding">

				<?php

				if ( has_custom_logo() ) {

					the_custom_logo();

				} else {

					?>

					<a href="<?php echo esc_url( home_url() ); ?>" class="header__logo">

						NiPeĐo <span>Lim</span>

					</a>

					<?php

				}

				?>

			</div>

			<!-- Desktop Navigation -->

			<nav class="header__nav">

				<a href="<?php echo esc_url( home_url( '/#hero' ) ); ?>" class="nav-link">
					Početna
				</a>

				<a href="<?php echo esc_url( home_url( '/#process' ) ); ?>" class="nav-link">
					Kako radimo
				</a>

				<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="nav-link">
					O nama
				</a>

				<a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="nav-link">
					Usluge
				</a>

				<a href="<?php echo esc_url( home_url( '/#why-us' ) ); ?>" class="nav-link">
					Zašto NiPeĐo Lim
				</a>

				<a href="<?php echo esc_url( home_url( '/#gallery' ) ); ?>" class="nav-link">
					Galerija
				</a>

				<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="nav-link">
					Kontakt
				</a>

			</nav>

			<!-- Right Side -->

			<div class="header__actions">

				<a href="tel:+381653305499" class="header__phone">

					<span class="phone-icon">

						<img
							src="<?php echo limplus_icon( 'phone.svg' ); ?>"
							alt=""
							aria-hidden="true"
							class="icon icon--sm"
						>

					</span>

					065 330 5499

				</a>

				<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="button button-primary">
    				Zatraži ponudu
				</a>

			</div>

			<!-- Mobile Toggle -->

			<button
				class="header__toggle"
				id="mobile-toggle"
				aria-label="Otvori meni"
				aria-expanded="false"
			>

				<img
					src="<?php echo limplus_icon( 'menu.svg' ); ?>"
					class="icon icon--md header__toggle-icon header__toggle-icon--menu"
					alt=""
					aria-hidden="true"
				>

				<img
					src="<?php echo limplus_icon( 'x.svg' ); ?>"
					class="icon icon--md header__toggle-icon header__toggle-icon--close"
					alt=""
					aria-hidden="true"
				>

			</button>

		</div>

	</div>

</header>