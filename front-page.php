<?php
/**
 * Front Page Template
 *
 * @package ALS_Roofing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

	<?php get_template_part( 'template-parts/hero' ); ?>

	<?php get_template_part( 'template-parts/about' ); ?>

</main>

<?php
get_footer();