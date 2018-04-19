<?php
get_header(); ?>

<div class="container">
    <?php if ( is_active_sidebar( 'home-page-content-1' ) ) : ?>
        <?php dynamic_sidebar( 'home-page-content-1' ); ?>
    <?php endif; ?>

    <hr/>

    <?php show_our_customers(); ?>
</div>

  <?php if ( is_active_sidebar( 'home-page-content-3' ) ) : ?>
      <?php dynamic_sidebar( 'home-page-content-3' ); ?>
  <?php endif; ?>

<?php if ( is_active_sidebar( 'home-page-content-4' ) ) : ?>
    <?php dynamic_sidebar( 'home-page-content-4' ); ?>
<?php endif; ?>

<?php
//get_sidebar();
get_footer();