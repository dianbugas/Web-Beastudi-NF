<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if (is_active_sidebar('footer-1')) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="bg-primary footer text-white" role="contentinfo">
		<div class="card text-center">
			<div class="site-info container">
				<a style="	height:60px;
    						line-height:60px;
							bottom: 0;
							width: 100%;
							padding-top: 25px;
							color:#FFFFFF;
							font-family: 'Roboto';
							font-size: #000000;"  
				href="<?php echo esc_url(__('https://wordpress.org/', 'sydney')); ?>"><?php printf(__('Copyright %s', 'sydney'), '&copy; STT Terpadu Nurul Fikri'); ?></a>
			</div><!-- .site-info -->
		</div><!-- .card text-center -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
