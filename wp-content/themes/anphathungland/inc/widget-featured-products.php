<?php
/*
Plugin Name: Widget Featured Post
Plugin URI: https://gisoft.vn
Description: danh sách sản phẩm nổi bật
Author: gi
Version: 1.0
Author URI: https://gisoft.vn
*/

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_gi_widget_featured_products' );
function create_gi_widget_featured_products() {
        register_widget('gi_Widget_Featured_Products');
}

/**
 * Tạo class gi_Widget
 */
class gi_Widget_Featured_Products extends WP_Widget {
 
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'gi_Widget_Featured_Products', // id của widget
            'Hiển thị sản phẩm nổi bật', // tên của widget
       
            array(
                'description' => 'Hiển thị sản phẩm nổi bật' // mô tả
            )
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {
        //Biến tạo các giá trị mặc định trong form
        $default = array(
            'title' => 'Sản phẩm',
            'post_number' => 3
        );
        //Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
        $instance = wp_parse_args( (array) $instance, $default );
        $title = esc_attr($instance['title']);
        $post_number = esc_attr($instance['post_number']);

        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
        echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['post_number'] = strip_tags($new_instance['post_number']);
        return $instance;
    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {
        extract( $args );

        $title = apply_filters( 'widget_title', $instance['title'] );
        $post_number = $instance['post_number'];
        
        echo $before_widget;
        
        // Nội dung trong widget
        // Sản phẩm
        ?>

        <div class="container">
            <div class="home-feature">
                <h1 class="module-title my-5 color-theme text-center"><?php echo $title; ?></h1>
                <div class="home-feature-box row owl-carousel owl-theme">

        <?php
        $args = array(
            'orderby' => 'DESC',
            'posts_per_page' => $post_number
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
            $i = 0;
            while( $query->have_posts() ) :
                $query->the_post();
            ?>

            <div class="box-item">
                <a class="image-box" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <img alt="<?php the_title(); ?>" class="placeholder" src="<?php echo THEME_URI; ?>/images/hero/placeholder-hero.png" />
                    <div class="image">
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('thumbnail');
                        else:
                        ?>
                            <img alt="" src="<?php echo THEME_URI; ?>/images/hero/hero-1.jpg" />
                        <?php 
                        endif;
                        ?>
                    </div>
                </a> <!--\a.image-box-->
                <div class="text">
                    <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    <div class="content">
                        <span class="input-group extra-info position">Đường Đào Trí, Phường Phú Thuận, Quận 7, Hồ Chí Minh</span>
                        <div class="input-group">
                            <span class="extra-info size" data-toggle="tooltip" data-placement="top" title="Diện tích">25m<sup>2</sup></span>
                            <span class="extra-info price" data-toggle="tooltip" data-placement="top" title="Giá tiền">26 triệu/m<sup>2</sup></span>
                        </div>
                        <div class="input-group">
                            <span class="extra-info bed highlight" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">2</span>
                            <span class="extra-info bathroom highlight" data-toggle="tooltip" data-placement="top" title="Phòng tắm">2</span>
                            <span class="extra-info dining highlight" data-toggle="tooltip" data-placement="top" title="Phòng ăn">1</span>
                        </div>
                    </div>
                </div> <!--\.text-->
            </div> <!--\.box-item-->
                    
            <?php
            endwhile;
        endif;
        
        ?>
                </div> <!--\.home-feature-box-->
            </div> <!--\.home-feature-->
        </div> <!--\.container-->

        <?php
        
        // Kết thúc nội dung trong widget
        echo $after_widget;
    }

}