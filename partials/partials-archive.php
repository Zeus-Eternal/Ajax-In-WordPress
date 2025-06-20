<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </header>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile;
else :
    echo '<p>' . esc_html__( 'No posts found.', 'ajaxinwp' ) . '</p>';
endif;
?>
