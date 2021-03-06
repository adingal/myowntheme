<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myowntheme
 */

get_header();
?>
	<section class="page-header" data-type="background" data-speed="4">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		?>
	</section><!-- .page-header -->

	<main id="primary" class="site-main">
		<div class="index-wrapper">

			<div class="index-content">
				<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_pagination();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div><!-- .index-content -->

			<?php if ( is_active_sidebar( 'sidebar-archive' ) ) : ?>
				<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar( 'sidebar-archive' ); ?>
				</aside><!-- #secondary -->
			<?php endif; ?>

		</div><!-- .index-wraper -->
	</main><!-- #main -->

<?php
get_footer();
