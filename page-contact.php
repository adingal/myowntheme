<?php
/**
 * Template Name: Contact Page
 */

// Get fields
$contact_title = get_field( 'contact_section_title' );
$contact_body = get_field( 'contact_section_body' );

get_header();
?>

	<main id="primary" class="site-contact">
        <div class="backdrop"></div>
        <div class="contact-wrapper">
            <?php
            while ( have_posts() ) :
                the_post();
            ?>

                <div class="contact-body">
                    <h1><?php echo esc_html__( $contact_title, 'myowntheme' ); ?></h1>
                    <p><?php echo esc_html__( $contact_body, 'myowntheme' ); ?></p>
                </div>
                
                <?php the_content(); ?>

            <?php
            endwhile; // End of the loop.
            ?>

            <?php if ( get_edit_post_link() ) : ?>
                    <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Edit <span class="screen-reader-text">%s</span>', 'myowntheme' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
            <?php endif; ?>
        </div><!-- .contact-wrapper -->
	</main><!-- #main -->

<?php
get_footer();
