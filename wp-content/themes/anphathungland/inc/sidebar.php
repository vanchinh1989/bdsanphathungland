<?php
register_sidebar(array(
    'name' => 'Home page content 3',
    'id' => 'home-page-content-3',
    'description' => 'Khu vực sidebar hiển thị ở home page',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));