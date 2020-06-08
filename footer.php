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
			<?php
				wp_nav_menu(
					array(
						'menu_class' => 'footer-social-menu',
						'theme_location' => 'social-1',
						'container' => 'nav',
						'container_class' => 'social-menu',
					)
				);
			?>
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
