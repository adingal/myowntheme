<div class="recent-post">
    <h2>Recent Posts</h2>
    <div class="suggestions">
        <?php
        $args = array(
            'posts_per_page' => 3,
            'ignore_sticky_posts' => 1,
        );
        $recent_post = new WP_Query( $args );
        
        if ( $recent_post->have_posts() ) :
            while ( $recent_post->have_posts() ) :
                $recent_post->the_post();
        ?>
    
        <div class="suggestion-item entry-content">
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="suggestion-content">
                <?php
                $excerpt = get_the_excerpt();

                $excerpt = substr($excerpt, 0, 220);
                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                echo esc_html( $result . '...', 'myowntheme' );
                ?>
            </p>

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
            ?>						
            <a href="<?php the_permalink(); ?>" class="continue-reading">
                <?php echo $continue_reading; ?>
            </a>						
        </div><!-- .suggestion-item -->

        <?php
            endwhile;
        endif;
        ?>
    </div><!-- .suggestions -->
</div><!-- .recent-post -->