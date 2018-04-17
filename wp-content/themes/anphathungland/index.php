<?php
get_header(); ?>

<div class="container">
    <?php if ( is_active_sidebar( 'home-page-content-1' ) ) : ?>
        <?php dynamic_sidebar( 'home-page-content-1' ); ?>
    <?php endif; ?>

    <hr/>

    <div class="home-testimonial">
      <h1 class="module-title my-5 color-theme text-center">Đánh giá của khách hàng</h1>
      <div class="row home-testimonial-box owl-carousel owl-theme">
        <div class="media">
          <img class="mr-3" src="<?php echo THEME_URI; ?>/images/avatar/noavatar-64.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="media-title mt-0">Bùi Tiến Dũng</h5>
            <h6 class="media-subtitle color-theme">Đã mua nhà tại Ba Vì <i class="fa fa-check-circle"></i></h6>
            <div class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
              vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            </div>
          </div>
        </div>
        <div class="media">
          <img class="mr-3" src="<?php echo THEME_URI; ?>/images/avatar/noavatar-64.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="media-title mt-0">Tim Cater</h5>
            <h6 class="media-subtitle color-theme">Đã mua nhà tại Ba Vì <i class="fa fa-check-circle"></i></h6>
            <div class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
              vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            </div>
          </div>
        </div>
        <div class="media">
          <img class="mr-3" src="<?php echo THEME_URI; ?>/images/avatar/noavatar-64.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="media-title mt-0">Tim Cater</h5>
            <h6 class="media-subtitle color-theme">Đã mua nhà tại Ba Vì <i class="fa fa-check-circle"></i></h6>
            <div class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
              vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            </div>
          </div>
        </div>
        <div class="media">
          <img class="mr-3" src="<?php echo THEME_URI; ?>/images/avatar/noavatar-64.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="media-title mt-0">Tim Cater</h5>
            <h6 class="media-subtitle color-theme">Đã mua nhà tại Ba Vì <i class="fa fa-check-circle"></i></h6>
            <div class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
              vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            </div>
          </div>
        </div>
      </div>
    </div>
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