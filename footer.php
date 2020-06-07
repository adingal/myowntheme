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
					printf( esc_html__( 'Powered by %s', 'myowntheme' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( '%1$s by %2$s.', 'myowntheme' ), 'myowntheme', '<a href="https://www.adingal.com" target="_blank">Alex Dingal</a>' );
				?>				
			</p>
			<p>
				&copy; <?php echo Date( 'Y' ); ?>
				<a href="https://www.adingal.com" target="_blank"><?php echo bloginfo( 'name' ); ?></a>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>

</body>
</html>
