<?php
/*
Plugin Name: Widget Call Now
Plugin URI: https://gisoft.vn
Description: button call now
Author: gi
Version: 1.0
Author URI: https://gisoft.vn
*/

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_gi_widget_call_now' );
function create_gi_widget_call_now() {
        register_widget('gi_Widget_Call_Now');
}

/**
 * Tạo class gi_Widget
 */
class gi_Widget_Call_Now extends WP_Widget {
 
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'gi_Widget_Call_Now', // id của widget
            'Hiển thị thông tin call now', // tên của widget
       
            array(
                'description' => 'Hiển thị thông tin call now' // mô tả
            )
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {
        //Biến tạo các giá trị mặc định trong form
        $default = array(
            'title' => 'Call Now',
            'note' => ''
        );
        //Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
        $instance = wp_parse_args( (array) $instance, $default );
        $title = esc_attr($instance['title']);
        $note = esc_attr($instance['note']);

        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
        echo '<p>Mô tả <input type="number" class="widefat" name="'.$this->get_field_name('note').'" value="'.$note.'" placeholder="'.$note.'" max="30" /></p>';
    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['note'] = strip_tags($new_instance['note']);
        return $instance;
    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {
        extract( $args );

        $title = apply_filters( 'widget_title', $instance['title'] );
        $note = $instance['note'];
        
        echo $before_widget;
        
        // Nội dung trong widget
        
        
        // Kết thúc nội dung trong widget
        echo $after_widget;
    }

}