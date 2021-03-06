<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package myowntheme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="post-wrapper">
			<div class="post-content">
				<?php
				while ( have_posts() ) :
					the_post();
	
					get_template_part( 'template-parts/content', 'single' );
	
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-title">Prev</span>',
							'next_text' => '<span class="nav-title">Next</span>',
						)
					);
	
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
	
				endwhile; // End of the loop.
				?>
			</div><!-- .post-content -->
			<?php get_sidebar(); ?>
		</div><!-- .post-wrapper -->
	</main><!-- #main -->

<?php
get_footer();
