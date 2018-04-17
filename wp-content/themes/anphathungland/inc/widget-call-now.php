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
            'note' => '',
            'phone' => ''
        );
        //Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
        $instance = wp_parse_args( (array) $instance, $default );
        $title = esc_attr($instance['title']);
        $note = esc_attr($instance['note']);
        $phone = esc_attr($instance['phone']);

        echo '<p>Phone <input type="text" class="widefat" name="'.$this->get_field_name('phone').'" value="'.$phone.'" placeholder="'.$phone.'" max="11" /></p>';
        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
        echo '<p>Mô tả <input type="text" class="widefat" name="'.$this->get_field_name('note').'" value="'.$note.'" placeholder="'.$note.'"/></p>';
    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['note'] = strip_tags($new_instance['note']);
        $instance['phone'] = strip_tags($new_instance['phone']);
        return $instance;
    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {
        extract( $args );

        $title = apply_filters( 'widget_title', $instance['title'] );
        $note = $instance['note'];
        $phone = $instance['phone'];
        
        echo $before_widget;
        
        // Nội dung trong widget
        ?>

        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8 wow fadeInUp">
                        <h3 class="color-theme"><?php echo $title; ?></h3>
                        <p class="text-dark"><?php echo $note; ?></p>
                    </div>
                    <div class="col-md-5 col-lg-4 text-center">
                        <a class="call btn btn-lg btn-success wow fadeInUp" href="tel:<?php echo $phone;?>"><span><i class="fa fa-phone-volume fa-fw"></i>Liên hệ ngay</span></a>
                    </div>
                </div>
            </div>
        </div><!--\.call-to-action-->

        <?php
        
        // Kết thúc nội dung trong widget
        echo $after_widget;
    }

}