<?php
/**
@ Thiết lập hàm hiển thị menu
@ gi_nav_menu_primary( $slug )
**/
if ( ! function_exists( 'gi_nav_menu_primary' ) ) {
    function gi_nav_menu_primary() {
      wp_nav_menu( array(
        'theme_location'    => 'primary-menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse offcanvas-collapse',
        'container_id'      => 'navbar-top',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()
        ) );
    }
  }