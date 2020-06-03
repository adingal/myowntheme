<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package myowntheme
 */

get_header();
?>
	<section class="page-header" data-type="background" data-speed="4">
		<h1 class="page-title"><?php esc_html_e( 'Oops! Page not found.', 'myowntheme' ); ?></h1>
	</section><!-- .page-header -->

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="page-content">
				<div class="page-content-body">
					<p><?php esc_html_e( 'It looks like nothing was found. Try one of the links below or search again?', 'myowntheme' ); ?></p>
	
					<?php get_search_form(); ?>
				</div>

				<?php get_template_part( 'template-parts/content', 'recent_posts' ); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
