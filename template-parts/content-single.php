<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myowntheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<p>
					<span class="author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a></span>
					<span class="posted_date"><?php the_time( 'F j, Y' ); ?></span>
					<span class="categories"><?php the_category( ', ' ); ?></span>
					<span class="tags"><?php the_tags( '', ', ', '' ); ?></span>
				</p>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="featured-image">
			<?php the_post_thumbnail(); ?>
		</figure>
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'myowntheme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'myowntheme' ),
					'after'  => '</div>',
				)
			);
		?>

		<?php if ( is_super_admin() ) : ?>
			<span class="edit-post-link">
				<?php edit_post_link( 'Edit' ); ?>
			</span>
		<?php endif; ?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
