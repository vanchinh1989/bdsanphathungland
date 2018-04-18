<?php
/*
Template Name: Tin Tức
*/
?>

<?php
get_header();

$post_in = 19;
$post_in_arr = array();
array_push($post_in_arr, $post_in);

$post_single = get_post($post_in);
?>

<div class="home-news">
    <div class="container">
        <h1 class="module-title my-4 color-theme text-left">Tin tức</h1>
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <div class="item-box overlay">
                    <a href="<?php echo esc_url(get_permalink($post_in)); ?>"><div class="image"><img src="<?php echo get_the_post_thumbnail_url( $post_single->ID   , 'medium' ); ?>" /></div></a>
                    <div class="text d-flex flex-column">
                    <a href="<?php echo esc_url(get_permalink($post_in)); ?>" title="<?php echo $post_single->post_title; ?>"><h4 class="title"><?php echo $post_single->post_title; ?></h4></a>
                    <div class="description mb-auto"><?php echo $post_single->post_excerpt; ?></div>
                        <div class="meta d-flex flex-row">
                            <?php echo get_the_time('F, Y', $post_single); ?>
                            <a href="<?php echo esc_url(get_permalink($post_in)); ?>" class="link">
                            <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-xs-12">
                <?php
                $args = array(
                    'orderby' => 'DESC',
                    'posts_per_page' => 3,
                    'post__not_in' => array($post_in)
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while( $query->have_posts() ) :
                        $query->the_post();
                        array_push($post_in_arr, get_the_ID());
                    ?>

                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <a class="flex-auto d-none d-lg-block card-img-left" href="<?php the_permalink(); ?>">
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('thumbnail');
                        else:
                        ?>
                            <img alt="<?php the_title(); ?>" src="<?php echo THEME_URI; ?>/images/news/news-1.jpg" data-holder-rendered="true">
                        <?php 
                        endif;
                        ?>
                    </a>
                    <div class="card-body d-flex flex-column">
                            <a class="card-text mb-auto" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <div class="d-flex flex-row">
                                <div class="text-muted"><?php echo get_the_date(_('F, Y')); ?></div>
                                <a href="<?php the_permalink(); ?>" class="link"><i class="fa fa-arrow-right"></i></a>
                            </div>
                    </div>
                </div>

                <?php
                    endwhile;
                endif;
                
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-9 news-list">
            <div class="full">
                <?php
                    $args = array(
                        'orderby' => 'DESC',
                        'posts_per_page' => 3,
                        'post__not_in' => $post_in_arr
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while( $query->have_posts() ) :
                            $query->the_post();
                        ?> 

                <div class="box-item clearfix">
                    <div class="image">
                        <a href="news-item.html">
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail('thumbnail');
                            else:
                            ?>
                                <img alt="<?php the_title(); ?>" src="<?php echo THEME_URI; ?>/images/news/news-1.jpg" />
                            <?php 
                            endif;
                            ?>
                        </a>
                    </div>
                    <div class="caption">
                        <a href="news-item.html">
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