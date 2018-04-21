<?php
/**
 * Tạo custom post type slide
 * https://piklist.com/learn/doc/piklist_post_types/
 */
function gi_register_post_types_slide( $post_types ) {
 
    // Tạo post type tên 'sanpham'
    $post_types['slide'] = array(
        'labels' => array(
            'name' => 'Slide',
            'singular_name' => 'Slide',
            'add_new' => 'Thêm Slide',
            'add_new_item' => 'Thêm Slide mới',
            'all_items' => 'Tất cả Slide',
            'edit_item' => 'Sửa Slide',
            'featured_image' => 'Ảnh đại diện Slide',
            'filter_item_list' => 'Lọc danh sách Slide',
            'item_list' => 'Danh sách Slide',
            'set_featured_image' => 'Thiết lập ảnh đại diện'
        ),
        'title' => 'Nhập tên Slide',
        'public' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'rewrite' => array('slug' => 'slide'),
        'hide_meta_box' => array('author'),
        'has_archive' => true,
        'menu_icon'  => 'dashicons-slides'
    );
 
    return $post_types;
}
add_filter('piklist_post_types', 'gi_register_post_types_slide');


if ( ! function_exists( 'show_slide' ) ) {
    function show_slide() {
        $args = array(
            'post_type' => 'slide',
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
                        <?php $title = get_the_title(); 
                        if (!empty($title)):
                        ?>
                        <div class="content-box">
                            <h2 class="title mb-3"><?php echo $title; ?></h2>
                            <div class="description"><?php the_excerpt(); ?></div>
                        </div>
                        <?php endif;?>
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