<?php
/*
Template Name: Tin Tức Tuyển Dụng
*/
?>

<?php
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 news-list">
            <div class="full">
                <?php
                    $args = array(
                        'orderby' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'tuyen-dung'
                            )
                        )
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while( $query->have_posts() ) :
                            $query->the_post();
                        ?> 

                <div class="box-item clearfix">
                    <div class="image">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail('medium');
                            else:
                            ?>
                                <img alt="<?php the_title(); ?>" src="<?php echo THEME_URI; ?>/images/news/news-1.jpg" />
                            <?php 
                            endif;
                            ?>
                        </a>
                    </div>
                    <div class="caption">
                        <a href="<?php the_permalink(); ?>">
                            <h5 class="title"><?php the_title(); ?></h5>
                        </a>
                        <div class="meta">
                            <span class="time"><?php echo get_the_date(_('F, Y')); ?></span>
                        </div>
                        <div class="description"><?php the_excerpt(); ?></div>
                    </div>
                </div><!--\.box-item-->
                
                <?php
                        endwhile;
                    endif;
                    ?>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="side-bar">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>