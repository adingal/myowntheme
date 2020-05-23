<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myowntheme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'myowntheme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'myowntheme' ), 'WordPress' );
					?>
				</a>
			</p>
			<p>
				&copy; <?php echo Date( 'Y' ); ?>
				<a href="http://adingal.000webhostapp.com"><?php echo bloginfo( 'name' ); ?></a>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
