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