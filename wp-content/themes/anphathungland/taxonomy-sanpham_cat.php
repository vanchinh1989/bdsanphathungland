<?php get_header(); ?>

<div class="container">
    <div class="home-feature">
      <?php 
      $term = get_term_by('slug', get_query_var( 'sanpham_cat' ), 'sanpham_cat' ); 
      ?>
      <h1 class="module-title my-5 color-theme text-center"><?php echo $term->name; ?></h1>
      <div class="row">
        <?php
        
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'sanpham' ); ?>
        <?php endwhile; ?>
        <?php //thachpham_pagination(); ?>
        <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

        
        
        <?php
        
        ?>

      </div>
    </div>
</div>


<?php get_footer(); ?>