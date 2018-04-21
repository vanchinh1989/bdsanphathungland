<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage anphathungland
 * @since An Phat Hung Land 1.0
 */

get_header(); ?>    

<?php
// Start the loop.
while ( have_posts() ) : the_post();?>

<div class="portfolio-banner">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="portfolio-image d-none d-lg-block">
          <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('thumbnail');
            else:
            ?>
                <img src="<?php echo THEME_URI; ?>/images/hero/hero-2.jpg" alt="<?php the_title(); ?>" />
            <?php 
            endif;
            ?>
        </div>
        <div class="portfolio-info">
          <h3 class="title color-theme bold"><?php the_title(); ?></h3>
          <div class="content">
            <span class="highlight extra-info position"><?php echo get_post_meta($post->ID, 'sanpham_diachi', true); ?></span>
            <span class="extra-info price highlight"><?php echo get_post_meta($post->ID, 'sanpham_price', true); ?> triệu/m<sup>2</sup></span>
            <span class="extra-info size highlight"><?php echo get_post_meta($post->ID, 'sanpham_dientich', true); ?>m<sup>2</sup></span>
            <div>
              <span class="extra-info bed highlight"><?php echo get_post_meta($post->ID, 'sanpham_phongngu', true); ?></span>
              <span class="extra-info bathroom highlight"><?php echo get_post_meta($post->ID, 'sanpham_phongtam', true); ?></span>
              <span class="extra-info dining highlight"><?php echo get_post_meta($post->ID, 'sanpham_phongan', true); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<nav class="portfolio-menu sticky-top">
    <div class="container">
      <div class="row">
        <ul class="nav flex-nowrap">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo THEME_URI; ?>/images/logo.jpg" /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll-to active" href="#tong-quan"><i class="fa fa-building fa-fw"></i> Tổng quan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll-to" href="#vi-tri"><i class="fa fa-map-marker-alt fa-fw"></i> Vị trí</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll-to" href="#mat-bang"><i class="fa fa-object-group fa-fw"></i> Mặt bằng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll-to" href="#chinh-sach"><i class="fa fa-clipboard-list fa-fw"></i> Chính sách</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3 id="tong-quan" class="module-title mt-3 color-theme">Tổng quan</h3>
        <p class="portfolio-content">
            <?php the_content(); ?>
        </p>
        <hr/>
        <h3 id="vi-tri" class="module-title mt-3 color-theme">Vị trí</h3>
        <p class="portfolio-content">
            <?php echo do_shortcode( wpautop( get_post_meta( $post->ID, 'sanpham_vitri', true) ) ) ?>
        </p>
        <hr/>
        <h3 id="mat-bang" class="module-title mt-3 color-theme">Mặt bằng</h3>
        <p class="portfolio-content">
          <?php echo do_shortcode( wpautop( get_post_meta( $post->ID, 'sanpham_matbang', true) ) ) ?>
        </p>
        <hr/>
        <h3 id="chinh-sach" class="module-title mt-3 color-theme">Chính sách</h3>
        <p class="portfolio-content">
          <?php echo do_shortcode( wpautop( get_post_meta( $post->ID, 'sanpham_chinhsach', true) ) ) ?>
        </p>
      </div>
    </div>
</div>

<?php
// End the loop.
endwhile;
?> 

<script>
  $(window).scroll(function(e) {
    if ($(document).scrollTop() >= $(".portfolio-menu").offset().top) {
        $(".portfolio-menu").addClass("fixed");
    } else {
        $(".portfolio-menu").removeClass("fixed");
    }
  })
</script>

<?php get_footer(); ?>
