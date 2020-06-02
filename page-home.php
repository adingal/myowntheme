<?php
/**
 * Template Name: Home Page
 */

// Get fields
$welcome_title = get_field( 'welcome_title' );
$welcome_body = get_field( 'welcome_body' );

$project_intro_title = get_field( 'project_introduction_title' );
$project_intro_body = get_field( 'project_introduction_body' );

get_header();
?>

	<main id="primary">
        <section class="welcome" data-type="background" data-speed="2">
            <div class="backdrop">
                <div class="welcome-text">
                    <h1><?php echo esc_html__( $welcome_title, 'myowntheme' ); ?></h1>
                    <p><?php echo esc_html__( $welcome_body, 'myowntheme' ); ?></p>
                </div>
                <div class="technologies">
                    <p>Tools &amp; technologies:</p>
                    <div class="languages">
                        <?php
                            $args = array(
                                'post_type' => 'technologies',
                                'posts_per_page' => 10,
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

        <div class="project-intro">
            <h2>
                <?php
                    if ( !empty( $project_intro_title ) ) :
                        echo esc_html__( $project_intro_title, 'myowntheme' );
                    else :
                        echo esc_html__( 'Project Title', 'myowntheme' );
                    endif;
                ?>
            </h2>
            <p>
                <?php
                    if ( !empty( $project_intro_body ) ) :
                    echo esc_html__( $project_intro_body, 'myowntheme' );
                    else :
                        echo esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, perspiciatis eligendi architecto ullam dicta.', 'myowntheme' );
                    endif;
                ?>
            </p>
        </div><!-- .project-intro -->
	</main><!-- #main -->

<?php
get_footer();
