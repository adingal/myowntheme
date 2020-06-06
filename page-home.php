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
                <h1>
                    <?php
                        if ( $welcome_title ) :
                            echo esc_html__( $welcome_title, 'myowntheme' );
                        else :
                            echo esc_html__( 'Welcome Title', 'myowntheme' );
                        endif;
                    ?>
                </h1>
                <p>
                    <?php
                        if ( $welcome_body ) :
                            echo esc_html__( $welcome_body, 'myowntheme' );
                        else :
                            echo esc_html__( 'Welcome body...', 'myowntheme' );
                        endif;
                    ?>
                </p>
            </div>
                
            <?php
                $args = array(
                    'post_type' => 'technologies',
                    'posts_per_page' => 10,
                    'order' => 'ASC',
                    'orderby' => 'ID',
                );
                $technologies = new WP_Query ( $args );

                if ( !empty( $technologies ) ) :
            ?>
                <div class="technologies">
                    <p>Tools &amp; technologies:</p>
                        <div class="languages">
                            <?php
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

                
                    
                    <?php
                        $args = array(
                            'post_type' => 'web_tools',
                            'posts_per_page' => 6,
                            'order' => 'ASC',
                            'orderby' => 'title',
                        );
                        $web_tools = new WP_Query ( $args );

                        if ( !empty( $web_tools ) ) :
                    ?>

                        <div class="tools">

                            <?php
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
                    <?php
                        endif; // End of if web_tools
                    ?>

                </div><!-- .technologies -->
            <?php
                endif; // End of if technologies
            ?>
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

    <?php
        $args = array(
            'post_type' => 'projects',
            'posts_per_page' => 6,
            'order' => 'ASC',
            'orderby' => 'ID',
        );
        $projects = new WP_Query ( $args );

        if ( $projects->have_posts() ) :
            while ( $projects->have_posts() ) :
                $projects->the_post();
    ?>
        
        <section class="projects">
            <div class="project-content">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>" class="continue-reading">Check it out</a>
            </div>
            <div class="project-highlights">
                <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                ?>
            </div>
        </section><!-- .projects -->  

    <?php
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
</main><!-- #main -->

<?php
get_footer();
