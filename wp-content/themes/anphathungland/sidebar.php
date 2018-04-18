<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage anphathungland
 * @since An Phat Hung land 1.0
 */


if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
<div id="widget-area" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
</div><!-- .widget-area -->
<?php else:?>

<h5 class="color-theme mb-3">Tin nổi bật</h5>
<div class="side-bar">
    <div class="news-list">
        <div class="compact">
            <div class="box-item clearfix">
                <div class="image">
                    <a href="news-item.html">
                        <img alt="HP công bố máy trạm &quot;siêu khủng&quot;: CPU hỗ trợ tối đa 56 luồng, 3TB RAM" src="<?php echo THEME_URI; ?>/images/news/news-2.jpg">
                    </a>
                </div>
                <div class="caption">
                    <a href="news-item.html">
                        <h5 class="title">HP công bố máy trạm "siêu khủng": CPU hỗ trợ tối đa 56 luồng, 3TB RAM</h5>
                    </a>
                    <div class="meta mt-1">
                        <span class="time">Thứ Năm, 01/02/18</span>
                    </div>
                </div>
            </div>
            <div class="box-item clearfix">
                <div class="image">
                    <a href="news-item.html">
                        <img alt="HP công bố máy trạm &quot;siêu khủng&quot;: CPU hỗ trợ tối đa 56 luồng, 3TB RAM" src="<?php echo THEME_URI; ?>/images/news/news-3.jpg">
                    </a>
                </div>
                <div class="caption">
                    <a href="news-item.html">
                        <h5 class="title">HP công bố máy trạm "siêu khủng": CPU hỗ trợ tối đa 56 luồng, 3TB RAM</h5>
                    </a>
                    <div class="meta mt-1">
                        <span class="time">Thứ Năm, 01/02/18</span>
                    </div>
                </div>
            </div>
            <div class="box-item clearfix">
                <div class="image">
                    <a href="news-item.html">
                        <img alt="HP công bố máy trạm &quot;siêu khủng&quot;: CPU hỗ trợ tối đa 56 luồng, 3TB RAM" src="<?php echo THEME_URI; ?>/images/news/news-1.jpg">
                    </a>
                </div>
                <div class="caption">
                    <a href="news-item.html">
                        <h5 class="title">HP công bố máy trạm "siêu khủng": CPU hỗ trợ tối đa 56 luồng, 3TB RAM</h5>
                    </a>
                    <div class="meta mt-1">
                        <span class="time">Thứ Năm, 01/02/18</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

