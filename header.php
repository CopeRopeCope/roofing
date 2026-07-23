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

						Lim+ <span>Pavlović</span>

					</a>

					<?php

				}

				?>

			</div>

			<!-- Desktop Navigation -->

			<nav class="header__nav">

				<?php

				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'primary-menu',
						'fallback_cb'    => false,
					)
				);

				?>

			</nav>

			<!-- Right Side -->

			<div class="header__actions">

				<a href="tel:+381653305499" class="header__phone">

					<span class="phone-icon">

						☎

					</span>

					065 330 5499

				</a>

				<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="button button-primary">
    				Zatraži ponudu
				</a>

			</div>

			<!-- Mobile Toggle -->

			<button class="header__toggle"
			        id="mobile-toggle"
			        aria-label="Open Menu"
			        aria-expanded="false">

				<span></span>
				<span></span>
				<span></span>

			</button>

		</div>

	</div>

</header>