<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myowntheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
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

	<?php myowntheme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			$continue_reading =	sprintf(
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
			);

			the_excerpt();
		?>
		<a href="<?php the_permalink(); ?>" class="continue-reading">
			<?php echo $continue_reading; ?>
		</a>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
