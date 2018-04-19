<?php
/**
*@ Thiết lập hàm hiển thị menu
*@ gi_nav_menu_primary( )
**/
if ( ! function_exists( 'gi_nav_menu_primary' ) ) {
  function gi_nav_menu_primary() {
    wp_nav_menu( array(
      'theme_location'    => 'primary-menu',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'navbar-collapse offcanvas-collapse',
      'container_id'      => 'navbar-top',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker()
      ) );
  }
}

/**
*@ Thiết lập hàm hiển thị menu
*@ gi_nav_menu_footer( )
**/
if ( ! function_exists( 'gi_nav_menu_footer' ) ) {
  function gi_nav_menu_footer() {
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
  }
}