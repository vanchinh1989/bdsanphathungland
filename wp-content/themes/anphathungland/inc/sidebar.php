<?php
register_sidebar(array(
    'name' => 'Home page content 1',
    'id' => 'home-page-content-1',
    'description' => 'Khu vực sidebar 1 hiển thị ở home page',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

register_sidebar(array(
    'name' => 'Home page content 2',
    'id' => 'home-page-content-2',
    'description' => 'Khu vực sidebar 2 hiển thị ở home page',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

register_sidebar(array(
    'name' => 'Home page content 3',
    'id' => 'home-page-content-3',
    'description' => 'Khu vực sidebar 3 hiển thị ở home page',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

register_sidebar(array(
    'name' => 'Home page content 4',
    'id' => 'home-page-content-4',
    'description' => 'Khu vực sidebar 4 hiển thị ở home page',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

register_sidebar(array(
    'name' => 'Home page content footer',
    'id' => 'home-page-content-footer',
    'description' => 'Khu vực hiển thị ở nội dung của cuối home page',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));