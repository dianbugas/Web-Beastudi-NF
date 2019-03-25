<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

					<footer style="height:50px;
								   line-height:50px;" 
								   class="bg-info footer text-white" id="colophon">

						<div class="text-center">
							<div class="site-info container">
							 <a style="font-family: 'Roboto';
									   font-size: #000000;
									   color:#ffffff"
									   href="<?php echo esc_url( __( 'http://wordpress.org/', 'understrap' ) ); ?>"><?php printf( __( '%s', 'understrap' ), 'Copyright &copy; STT Terpadu Nurul Fikri' ); ?></a>

							</div>
						</div>

					</footer><!-- #colophon -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

