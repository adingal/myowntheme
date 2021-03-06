<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myowntheme
 */

?>

<section class="no-results not-found">

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'myowntheme' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
		?>

		<div class="page-content-body">

			<p><?php esc_html_e( 'Nothing matched your search terms. Please try again with some different keywords.', 'myowntheme' ); ?></p>
			<?php get_search_form(); ?>

		</div>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'myowntheme' ); ?></p>

		<?php
			get_search_form();

		endif;

			get_template_part( 'template-parts/content', 'recent_posts' );
		?>
		
	</div><!-- .page-content -->
</section><!-- .no-results -->
