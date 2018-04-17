<?php
/**
 * Tạo custom post type product
 * https://piklist.com/learn/doc/piklist_post_types/
 */
function gi_register_post_types_product( $post_types ) {
 
    // Tạo post type tên 'sanpham'
    $post_types['sanpham'] = array(
        'labels' => array(
            'name' => 'Dự án',
            'singular_name' => 'Dự án',
            'add_new' => 'Thêm dự án',
            'add_new_item' => 'Thêm dự án mới',
            'all_items' => 'Tất cả dự án',
            'edit_item' => 'Sửa dự án',
            'featured_image' => 'Ảnh đại diện dự án',
            'filter_item_list' => 'Lọc danh sách dự án',
            'item_list' => 'Danh sách dự án',
            'set_featured_image' => 'Thiết lập ảnh đại diện'
        ),
        'title' => 'Nhập tên dự án',
        'public' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'comment'),
        'rewrite' => array('slug' => 'sanpham'),
        'hide_meta_box' => array('author'),
        'has_archive' => true
    );
 
    return $post_types;
}
add_filter('piklist_post_types', 'gi_register_post_types_product');
 

/**
 * Tạo <a href="https://thachpham.com/wordpress/wordpress-development/wordpress-custom-taxonomy-toan-tap.html" data-wpel-link="internal">custom taxonomy</a>
 * https://piklist.com/learn/doc/getting-started-taxonomies-piklist/
 */
function gi_register_taxonomies_product( $taxonomies ) {
    $taxonomies['sanpham_cat'] = array(
        'post_type' => 'sanpham',
        'name' => 'sanpham_cat',
        'show_admin_column' => true,
        'configuration' => array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Danh mục dự án',
                'name_singular' => 'Danh mục dự án',
                'all_items' => 'Tất cả danh mục dự án',
                'edit_item' => 'Sửa danh mục dự án',
                'view_item' => 'Xem danh mục dự án',
                'add_new_item' => 'Thêm danh mục dự án'
            ),
            'show_ui' => true,
            'query_vars' => true,
            'rewrite' => array('slug'=>'sanpham_cat')
        )
    );
 
    return $taxonomies;
}
add_filter('piklist_taxonomies', 'gi_register_taxonomies_product');

?>