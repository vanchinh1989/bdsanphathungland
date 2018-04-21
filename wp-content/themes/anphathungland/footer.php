<hr class="mb-0" />

<?php if ( is_active_sidebar( 'home-page-content-footer' ) ) : ?>
    <?php dynamic_sidebar( 'home-page-content-footer' ); ?>
<?php endif; ?>

<div class="footer-wrapper">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'    => 'footer-menu',
                        'depth'             => 1,
                        'container'         => 'ul',
                        'container_class'   => 'navbar-collapse offcanvas-collapse',
                        'container_id'      => 'navbar-top',
                        'menu_class'        => 'col-sm-12 d-flex justify-content-end',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                        ) );
                ?>
            </div>
        </div>
    </div>

    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo THEME_URI; ?>/images/logo-transparent.png" /></a>
                </div>
                <div class="col-md-5">
                    <h4 class="text-white bold my-sm-3 my-md-2 text-center text-md-left">An Phát Hưng Land</h4>
                    <div class="contact-info">
                        <ul class="fa-ul text-white">
                            <li><span class="fa-li"><i class="fa fa-map-marker-alt fa-fw"></i></span> <span class="bold">Địa chỉ:</span><?php echo get_option('gi_option_diachi'); ?></li>
                            <li><span class="fa-li"><i class="fa fa-phone-volume fa-fw"></i></span> <span class="bold">Hotline:</span> <a class="text-white" href="tel:<?php echo get_option('gi_option_hotline'); ?>"><?php echo get_option('gi_option_hotline'); ?></a> - <a class="text-white" href="tel:<?php echo get_option('gi_option_hotline1'); ?>"><?php echo get_option('gi_option_hotline1'); ?></a></li>
                            <li><span class="fa-li"><i class="fa fa-envelope fa-fw"></i></span> <span class="bold">Email:</span> <a class="text-white" href="mailto:<?php echo get_option('gi_option_email'); ?>"><?php echo get_option('gi_option_email'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="fb-page" data-href="https://www.facebook.com/SanAnPhatHung/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SanAnPhatHung/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SanAnPhatHung/">Sàn giao dịch BĐS An Phát Hưng</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>