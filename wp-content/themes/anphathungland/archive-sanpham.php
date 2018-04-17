<?php get_header(); ?>

<div class="container">
    <div class="home-feature">
      <h1 class="module-title my-5 color-theme text-center">Các dự án nghỉ dưỡng</h1>
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