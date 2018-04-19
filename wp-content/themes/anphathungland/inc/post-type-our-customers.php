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
        
        <div class="home-testimonial">
            <h1 class="module-title my-5 color-theme text-center">Đối tác</h1>
            <div class="row home-testimonial-box owl-carousel owl-theme">

        <?php
        $query = new WP_Query($args);
        if ($query->have_posts()):
            while( $query->have_posts() ) :
                $query->the_post();
                $postId = get_the_ID();
                ?>
                <div class="media">
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('thumbnail', array('class'=>'mr-3'));
                        else:
                        ?>
                            <img class="mr-3" src="<?php echo THEME_URI; ?>/images/avatar/noavatar-64.jpg" alt="<?php the_title(); ?>">
                        <?php 
                        endif;
                        ?>
                </div>
                    
                <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
            </div>
        </div> <!--\.home-testimonial-->

        <?php
    }
}
?>