<?php
/*
Plugin Name: Widget Top Tin Tức Mới Nhất
Plugin URI: https://gisoft.vn
Description: tin tức mới nhất
Author: gi
Version: 1.0
Author URI: https://gisoft.vn
*/

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_gi_widget_related_news' );
function create_gi_widget_related_news() {
        register_widget('gi_Widget_Related_News');
}

/**
 * Tạo class gi_Widget
 */
class gi_Widget_Related_News extends WP_Widget {
 
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'gi_Widget_Related_News', // id của widget
            'Hiển thị tin tức mới nhất', // tên của widget
       
            array(
                'description' => 'Hiển thị tin tức mới nhất' // mô tả
            )
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {
        //Biến tạo các giá trị mặc định trong form
        $default = array(
            'title' => 'Tin nổi bật',
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
        
        //echo $before_widget;
        
        // Nội dung trong widget
        // Sản phẩm
        ?>

        <h5 class="color-theme mb-3"><?php echo $title; ?></h5>
        <div class="side-bar">
            <div class="news-list">
                <div class="compact">

                <?php
                $args = array(
                    'orderby' => 'DESC',
                    'posts_per_page' => $post_number
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while( $query->have_posts() ) :
                        $query->the_post();
                    ?>

                    <div class="box-item clearfix">
                        <div class="image">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail('thumbnail');
                                else:
                                ?>
                                    <img alt="<?php the_title(); ?>" src="<?php echo THEME_URI; ?>/images/news/news-2.jpg">
                                <?php 
                                endif;
                                ?>
                            </a>
                        </div>
                        <div class="caption">
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="title"><?php the_title(); ?></h5>
                            </a>
                            <div class="meta mt-1">
                                <span class="time"><?php echo get_the_date(_('F, Y')); ?></span>
                            </div>
                        </div>
                    </div>

                    <?php
                    endwhile;
                endif;

                wp_reset_query();
                ?>    

                </div>
            </div>
        </div>

        <?php
        
        // Kết thúc nội dung trong widget
        //echo $after_widget;
    }

}