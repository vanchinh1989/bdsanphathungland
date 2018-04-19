<?php
// Thay doi duong dan logo admin
function wpc_url_login(){
    return "http://localhost:90/bdsanphathungland/"; // duong dan vao website cua ban
}
add_filter('login_headerurl', 'wpc_url_login');

// Thay doi logo admin wordpress
function login_css() {
    wp_enqueue_style( 'login_css', get_template_directory_uri() . '/css/login.css' ); // duong dan den file css moi
}
add_action('login_head', 'login_css');


function gi_custom_logo() {
    echo '
    <style type="text/css">
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
    background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/logo-admin.png) !important;
    background-position: 0 0;
    color:rgba(0, 0, 0, 0);
    }
    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
    background-position: 0 0;
    }
    </style>
    ';
}
     
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'gi_custom_logo');


/**
 * Sửa chữ dưới footer của trang quản trị
 */
function tp_admin_footer_credits( $text ) {
    $text = '<p>Chào mừng bạn đến với website anphathungland.com - Được thiết kế by <a href="http://gisoft.vn">gisoft.vn</a></p>';
     return $text;
 }
add_filter( 'admin_footer_text', 'tp_admin_footer_credits' );