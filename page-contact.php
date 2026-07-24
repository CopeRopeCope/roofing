<?php
/**
 * Contact Page
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <?php get_template_part( 'template-parts/contact-page' ); ?>

</main>

<?php get_footer(); ?>