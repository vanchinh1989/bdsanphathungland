<?php
/**
 * Tạo custom post type đối tác
 * https://piklist.com/learn/doc/piklist_post_types/
 */
function gi_register_post_types_our_customers( $post_types ) {
 
    // Tạo post type tên 'sanpham'
    $post_types['ourcustomers'] = array(
        'labels' => array(
            'name' => 'Đối tác',
            'singular_name' => 'Đối tác',
            'add_new' => 'Thêm đối tác',
            'add_new_item' => 'Thêm đối tác mới',
            'all_items' => 'Tất cả đối tác',
            'edit_item' => 'Sửa đối tác',
            'featured_image' => 'Ảnh đại diện đối tác',
            'filter_item_list' => 'Lọc danh sách đối tác',
            'item_list' => 'Danh sách đối tác',
            'set_featured_image' => 'Thiết lập ảnh đại diện'
        ),
        'title' => 'Nhập tên đối tác',
        'public' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'rewrite' => array('slug' => 'ourcustomers'),
        'hide_meta_box' => array('author'),
        'has_archive' => true,
        'menu_icon'  => 'dashicons-groups'
    );
 
    return $post_types;
}
add_filter('piklist_post_types', 'gi_register_post_types_our_customers');


if ( ! function_exists( 'show_our_customers' ) ) {
    function show_our_customers() {
        $args = array(
            'post_type' => 'ourcustomers',
            'orderby' => 'DESC'
        );
        ?>
        
        <div id="banner" class="banner-box owl-carousel owl-theme">
        
        <?php
        $query = new WP_Query($args);
        if ($query->have_posts()):
            while( $query->have_posts() ) :
                $query->the_post();
                $postId = get_the_ID();
                ?>
                <div class="banner-item">
                    <div class="blur-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url( $postId, 'full' ); ?>')"></div>
                    <div class="absolute-box">
                    <div class="container">
                        <div class="content-box wow fadeInUp">
                            <h2 class="title mb-3"><?php the_title(); ?></h2>
                            <div class="description"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                    </div>
                    <div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $postId, 'full' ); ?>)"></div>
                </div>
                <?php
            endwhile;
        endif;

        ?>
        
        </div> <!--\.banner-->

        <?php
    }
}
?>