<?php
/**
  @ Thiết lập các hằng dữ liệu quan trọng
  @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
  @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
  **/
define( 'THEME_URL', get_stylesheet_directory() );
define( 'THEME_URI', get_stylesheet_directory_uri() );
define( 'CORE', THEME_URL . '/inc' );

/**
 * Nhúng tập tin /inc/init.php vào để load một số chức năng trong website
 */
require_once( CORE . '/init.php' );

/**
 @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
if ( ! isset( $content_width ) ) {
	/*
	 * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
	 */
	$content_width = 620;
}

/**
  @ Thiết lập các chức năng sẽ được theme hỗ trợ
  **/
  if ( ! function_exists( 'gi_theme_setup' ) ) {
	/*
	 * Nếu chưa có hàm githeme_setup() thì sẽ tạo mới hàm đó
	 */
	function gi_theme_setup() {
			/*
			 * Thiết lập theme có thể dịch được
			 */
			$language_folder = THEME_URL . '/languages';
			load_theme_textdomain( 'gi', $language_folder );

			/*
			 * Tự chèn RSS Feed links trong <head>
			 */
			add_theme_support( 'automatic-feed-links' );

			/*
			 * Thêm chức năng post thumbnail
			 */
			add_theme_support( 'post-thumbnails' );

			/*
			 * Thêm chức năng title-tag để tự thêm <title>
			 */
			add_theme_support( 'title-tag' );

			/*
			 * Thêm chức năng post format
			 */
			add_theme_support( 'post-formats',
					array(
							'video',
							'image',
							'audio',
							'gallery'
					)
			 );

			/*
			 * Thêm chức năng custom background
			 */
			$default_background = array(
					'default-color' => '#e8e8e8',
			);
			add_theme_support( 'custom-background', $default_background );

			/*
			 * Tạo primary menu cho theme
			 */
			 register_nav_menu ( 'primary-menu', __('Primary Menu', 'gi') );

			 /*
			 * Tạo footer menu cho theme
			 */
			register_nav_menu ( 'footer-menu', __('Footer Menu', 'gi') );

			/*
			 * Tạo sidebar cho theme
			 */
			 $sidebar = array(
				'name' => __('Main Sidebar', 'gi'),
				'id' => 'main-sidebar',
				'description' => 'Main sidebar',
				'class' => 'main-sidebar',
				'before_title' => '<h3 class="widgettitle">',
				'after_sidebar' => '</h3>'
			 );
			 register_sidebar( $sidebar );
	}
	add_action ( 'init', 'gi_theme_setup' );

}


/**
@ Hàm hiển thị ảnh thumbnail của post.
@ Ảnh thumbnail sẽ không được hiển thị trong trang single
@ Nhưng sẽ hiển thị trong single nếu post đó có format là Image
@ githumbnail( $size )
**/
if ( ! function_exists( 'githumbnail' ) ) {
	function githumbnail( $size ) {
	  // Chỉ hiển thumbnail với post không có mật khẩu
	  if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
		<figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
	  endif;
	}
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}