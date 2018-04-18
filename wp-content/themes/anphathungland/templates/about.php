<?php
/*
 Template Name: About
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <img class="w-100" src="<?php echo THEME_URI; ?>/images/banner/banner-1.jpg"/>
        <?php while ( have_posts() ) : the_post(); ?> 
        <h2 class="module-title mt-4 color-theme"><?php the_title(); ?></h2>
        <p class="content">
          <?php the_content(); ?>
        </p>
        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
      </div>
    </div>
</div>

<?php get_footer(); ?>