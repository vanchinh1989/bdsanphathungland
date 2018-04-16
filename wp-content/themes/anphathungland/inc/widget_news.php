<?php
/*
Plugin Name: Widget Tin Tức Nổi Bật
Plugin URI: https://gisoft.vn
Description: tin tức nổi bật
Author: gi
Version: 1.0
Author URI: https://gisoft.vn
*/

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_gi_widget_cat' );
function create_gi_widget_cat() {
        register_widget('gi_Widget_Cat');
}

/**
 * Tạo class gi_Widget
 */
class gi_Widget_Cat extends WP_Widget {
 
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'gi_Widget_Cat', // id của widget
            'Hiển thị tin tức nổi bật', // tên của widget
       
            array(
                'description' => 'Hiển thị tin tức nổi bật' // mô tả
            )
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {
        //Biến tạo các giá trị mặc định trong form
        $default = array(
            'title' => 'Tin tức',
            'post_number' => 3
        );
        //Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
        $instance = wp_parse_args( (array) $instance, $default );
        $title = esc_attr($instance['title']);
        $post_number = esc_attr($instance['post_number']);

        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
        //echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        //$instance['post_number'] = strip_tags($new_instance['post_number']);
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
        
        $post_in = 46;
        // Nội dung trong widget
        // Sản phẩm
        echo '<div class="home-news bg-f0">';
        echo '<div class="container">';
        echo '<h1 class="module-title my-5 color-theme text-center">'.$title.'</h1>';
        echo '<div class="row">';
        
        $post_single = get_post($post_in);
        ?>

        <div class="col-md-7 col-xs-12">
            <div class="item-box overlay wow fadeInUp">
                <a href="<?php $post_single->permalink; ?>" title="<?php echo $post_single->title; ?>"><div class="image"><img src="<?php echo THEME_URI; ?>/images/news/news-1.jpg" /></div></a>
                <div class="text d-flex flex-column">
                    <a href="<?php the_permalink(); ?>"  title="<?php echo $post_single->title; ?>"><h4 class="title"><?php echo $post_single->title; ?></h4></a>
                    <div class="description mb-auto">Mới đây, Savills cho biết từ quý II/2018 đến hết năm 2019 Vingroup sẽ cho ra mắt khoảng hơn 11.500 căn biệt
                        thự, nhà liền kề, phần lớn tập trung tại Đông Anh, Gia Lâm, Đan Phượng và Từ Liêm.</div>
                    <div class="meta d-flex flex-row">
                        Nov 12
                        <a href="#" class="link">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-5 col-xs-12">

        <?php
        $args = array(
            'orderby' => 'DESC',
            'posts_per_page' => 3,
            'post__not_in' => array($post_in)
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
            $i = 0;
            while( $query->have_posts() ) :
                $query->the_post();
            ?>

            <div class="card flex-md-row mb-4 box-shadow h-md-250 wow fadeInUp">
                <a class="flex-auto d-none d-lg-block card-img-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img alt="Thumbnail [200x250]" src="<?php echo THEME_URI; ?>/images/news/news-1.jpg" data-holder-rendered="true"></a>
                <div class="card-body d-flex flex-column">
                    <a class="card-text mb-auto" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">T&T Twin Towers là tòa tháp đáng sống nhất tại Đà Nẵng</a>
                    <div class="d-flex flex-row">
                        <div class="text-muted">Nov 12</div>
                        <a href="#" class="link"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
                    
            <?php
            endwhile;
        endif;
        
        ?>
        
        </div>

        <?php
        
        // Kết thúc nội dung trong widget
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo $after_widget;
    }

}