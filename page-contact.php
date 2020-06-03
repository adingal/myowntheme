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
        </div><!-- .contact-wrapper -->
	</main><!-- #main -->

<?php
get_footer();
