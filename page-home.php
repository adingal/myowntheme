<?php
/**
 * Template Name: Homepage
 */

// Get fields
$welcome_title = get_field( 'welcome_title' );
$welcome_description = get_field( 'welcome_description' );

get_header();
?>

	<main id="primary" class="site-main">
        <div class="welcome">
            <div class="welcome-text">
                <h1><?php echo esc_html__( $welcome_title, 'myowntheme' ); ?></h1>
                <p><?php echo esc_html__( $welcome_description, 'myowntheme' ); ?></p>
            </div>
            <div class="technologies">
                <div class="languages">
                    <?php
                        $args = array(
                            'post_type' => 'technologies',
                            'posts_per_page' => 6,
                            'order' => 'ASC',
                            'orderby' => 'ID',
                        );
                        $technologies = new WP_Query ( $args );

                        if ( $technologies->have_posts() ) :
                            while ( $technologies->have_posts() ) :
                                $technologies->the_post();
                    ?>

                    <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'welcome-image' );
                        endif;
                    ?>

                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="tools">
                    <img src="" alt="Git logo">
                    <img src="" alt="Gulp logo">
                    <img src="" alt="NPM logo">
                </div>
            </div>
        </div>
	</main><!-- #main -->

<?php
get_footer();
