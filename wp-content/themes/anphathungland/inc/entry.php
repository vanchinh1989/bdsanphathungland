<?php
/**
@ Hàm hiển thị tiêu đề của post trong .entry-header
@ Tiêu đề của post sẽ là nằm trong thẻ <h1> ở trang single
@ Còn ở trang chủ và trang lưu trữ, nó sẽ là thẻ <h2>
@ gi_entry_header()
**/
if ( ! function_exists( 'gi_entry_header' ) ) {
  function gi_entry_header() {
    if ( is_single() ) : ?>
      <h3 class="module-title mt-3 color-theme"><?php the_title(); ?></h3>
    <?php else : ?>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h2><?php
 
    endif;
  }
}
 
/**
@ Hàm hiển thị thông tin của post (Post Meta)
@ gi_entry_meta()
**/
if( ! function_exists( 'gi_entry_meta' ) ) {
  function gi_entry_meta() {
    if ( ! is_page() ) :
      echo '<div class="entry-meta">';
 
        // Hiển thị tên tác giả, tên category và ngày tháng đăng bài
        printf( __('<span class="author">Posted by %1$s</span>', 'gi'),
          get_the_author() );
 
        printf( __('<span class="date-published"> at %1$s</span>', 'gi'),
          get_the_date() );
 
        printf( __('<span class="category"> in %1$s</span>', 'gi'),
          get_the_category_list( ', ' ) );
 
        // Hiển thị số đếm lượt bình luận
        if ( comments_open() ) :
          echo ' <span class="meta-reply">';
            comments_popup_link(
              __('Leave a comment', 'gi'),
              __('One comment', 'gi'),
              __('% comments', 'gi'),
              __('Read all comments', 'gi')
             );
          echo '</span>';
        endif;
      echo '</div>';
    endif;
  }
}
 
/*
 * Thêm chữ Read More vào excerpt
 */
function gi_readmore() {
  return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'gi') . '</a>';
}
add_filter( 'excerpt_more', 'gi_readmore' );
 
  /**
  @ Hàm hiển thị nội dung của post type
  @ Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
  @ Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
  @ gi_entry_content()
  **/
  if ( ! function_exists( 'gi_entry_content' ) ) {
    function gi_entry_content() {
 
      if ( ! is_single() ) :
        the_excerpt();
      else :
        the_content();
 
        /*
         * Code hiển thị phân trang trong post type
         */
        $link_pages = array(
          'before' => __('<p>Page:', 'gi'),
          'after' => '</p>',
          'nextpagelink'     => __( 'Next page', 'gi' ),
          'previouspagelink' => __( 'Previous page', 'gi' )
        );
        wp_link_pages( $link_pages );
      endif;
 
    }
  }
 
  /**
@ Hàm hiển thị tag của post
@ gi_entry_tag()
**/
if ( ! function_exists( 'gi_entry_tag' ) ) {
  function gi_entry_tag() {
    if ( has_tag() ) :
      echo '<div class="entry-tag">';
      printf( __('Tagged in %1$s', 'gi'), get_the_tag_list( '', ', ' ) );
      echo '</div>';
    endif;
  }
}