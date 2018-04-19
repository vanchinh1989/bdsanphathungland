<?php get_header(); ?>
 
<div class="container">
        <div class="row">
                <div class="col-lg-9">
        <?php
                _e('<h2>404 NOT FOUND</h2>', 'gi');
                _e('<p>The article you were looking for was not found, but maybe try looking again!</p>', 'gi');

                get_search_form();

                _e('<h3>Content categories</h3>', 'gi');
                echo '<div class="404-catlist">';
                wp_list_categories( array( 'title_li' => '' ) );
                echo '</div>';

                _e('<h3>Tag Cloud</h3>', 'gi');
                wp_tag_cloud();
        ?>
                </div>
                <div class="col-lg-3">
                        <?php get_sidebar(); ?>
                </div>
        </div>
</div>
                
<?php get_footer(); ?>