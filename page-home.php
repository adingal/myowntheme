<?php
/**
 * Template Name: Homepage
 */

// Get fields
$welcome_title = get_field( 'welcome_title' );
$welcome_description = get_field( 'welcome_description' );

get_header();
?>

	<main id="primary">
        <section class="welcome" data-type="background" data-speed="4">
            <div class="backdrop">
                <div class="welcome-text">
                    <h1><?php echo esc_html__( $welcome_title, 'myowntheme' ); ?></h1>
                    <p><?php echo esc_html__( $welcome_description, 'myowntheme' ); ?></p>
                </div>
                <div class="technologies">
                    <p>Tools &amp; technologies:</p>
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
                                the_post_thumbnail();
                            endif;
                        ?>
    
                        <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                    </div><!-- .languages -->
                    <div class="tools">
                        
                        <?php
                            $args = array(
                                'post_type' => 'web_tools',
                                'posts_per_page' => 6,
                                'order' => 'ASC',
                                'orderby' => 'title',
                            );
                            $web_tools = new WP_Query ( $args );
    
                            if ( $web_tools->have_posts() ) :
                                while ( $web_tools->have_posts() ) :
                                    $web_tools->the_post();
                        ?>
    
                        <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                        ?>
    
                        <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                    </div><!-- .tools -->
                </div><!-- .technologies -->
            </div><!-- .backdrop -->
        </section><!-- .welcome -->
	</main><!-- #main -->

<?php
get_footer();
