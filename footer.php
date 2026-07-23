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

        <p>
            &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
            Lim+ Pavlović.
            Sva prava zadržana.
        </p>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>