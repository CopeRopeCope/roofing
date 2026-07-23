<?php
/**
 * Front Page Template
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

	<?php get_template_part( 'template-parts/hero' ); ?>

	<?php get_template_part( 'template-parts/process' ); ?>

	<?php get_template_part( 'template-parts/about' ); ?>

	<?php get_template_part( 'template-parts/services' ); ?>

	<?php get_template_part( 'template-parts/why-us' ); ?>

	<?php get_template_part( 'template-parts/gallery' ); ?>

</main>

<?php get_footer(); ?>