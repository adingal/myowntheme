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
		<div class="page-header-backdrop">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			?>
		</div>
	</section><!-- .page-header -->

	<main id="primary" class="site-main">

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

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-title">Prev</span>',
						'next_text' => '<span class="nav-title">Next</span>',
					)
				);

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
