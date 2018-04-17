<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php gi_entry_header(); ?>
    <p class="content">
        <?php gi_entry_content(); ?>
        <?php ( is_single() ? gi_entry_tag() : '' ); ?>
    </p>
</article>
