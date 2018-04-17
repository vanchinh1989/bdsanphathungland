<div class="col-md-6 col-xl-4">
    <div class="box-item" id="post-<?php the_ID(); ?>">
        <a class="image-box" href="<?php the_permalink(); ?>">
            <img class="placeholder" src="<?php echo THEME_URI; ?>/images/hero/placeholder-hero.png" />
            <div class="image">
                <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail('thumbnail');
                else:
                ?>
                    <img alt="" src="<?php echo THEME_URI; ?>/images/hero/hero-1.jpg" alt="<?php the_title(); ?>" />
                <?php 
                endif;
                ?>
            </div>
        </a>
        <div class="text">
            <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <div class="content">
                <span class="input-group extra-info position"><?php echo get_post_meta($post->ID, 'sanpham_diachi', true); ?></span>
                <div class="input-group">
                    <span class="extra-info size" data-toggle="tooltip" data-placement="top" title="Diện tích"><?php echo get_post_meta($post->ID, 'sanpham_dientich', true); ?>m<sup>2</sup></span>
                    <span class="extra-info price" data-toggle="tooltip" data-placement="top" title="Giá tiền"><?php echo get_post_meta($post->ID, 'sanpham_price', true); ?> triệu/m<sup>2</sup></span>
                </div>
                <div class="input-group">
                    <span class="extra-info bed highlight" data-toggle="tooltip" data-placement="top" title="Phòng ngủ"><?php echo get_post_meta($post->ID, 'sanpham_phongngu', true); ?></span>
                    <span class="extra-info bathroom highlight" data-toggle="tooltip" data-placement="top" title="Phòng tắm"><?php echo get_post_meta($post->ID, 'sanpham_phongtam', true); ?></span>
                    <span class="extra-info dining highlight" data-toggle="tooltip" data-placement="top" title="Phòng ăn"><?php echo get_post_meta($post->ID, 'sanpham_phongan', true); ?></span>
                </div>
            </div>
        </div>
    </div><!--\.boxitem-->
</div>