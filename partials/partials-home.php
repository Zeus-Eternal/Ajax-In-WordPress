<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="home-post">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php endwhile;
else :
    echo '<p>' . esc_html__( 'No posts found.', 'ajaxinwp' ) . '</p>';
endif;
?>
