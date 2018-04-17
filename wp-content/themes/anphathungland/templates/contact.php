<?php
/*
 Template Name: Contact
 */
?>

<?php get_header(); ?>
<div class="container">
    <h1 class="mt-4 mb-3 color-theme">Liên hệ</h1>
    <div class="row mb-3">
      <div class="col-lg-7">
        <h3>Send us a Message</h3>
        <?php echo do_shortcode('[contact-form-7 id="61" title="Liên hệ"]') ?>
      </div>
      <div class="col-lg-5">
        <h3>Contact Details</h3>
        <ul class="fa-ul">
          <li class="my-3">
            <span class="fa-li">
              <i class="fa fa-map-marker-alt fa-fw"></i>
            </span>
            <span class="bold">Địa chỉ:</span> <?php echo get_option( 'gi_option_diachi' );?></li>
          <li class="my-3">
            <span class="fa-li">
              <i class="fa fa-phone-volume fa-fw"></i>
            </span>
            <span class="bold">Hotline:</span>
            <a href="tel:<?php echo get_option( 'gi_option_hotline' );?>"><?php echo get_option( 'gi_option_hotline' );?></a> -
            <a href="tel:<?php echo get_option( 'gi_option_hotline1' );?>"><?php echo get_option( 'gi_option_hotline1' );?></a>
          </li>
          <li class="my-3">
            <span class="fa-li">
              <i class="fa fa-envelope fa-fw"></i>
            </span>
            <span class="bold">Email:</span>
            <a href="mailto:<?php echo get_option( 'gi_option_email' );?>"><?php echo get_option( 'gi_option_email' );?></a>
          </li>
        </ul>
        <?php echo get_option( 'gi_option_googlemap' );?>
      </div>
    </div>
</div>

<?php get_footer(); ?>