<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sàn Giao Dịch Bất Động Sản - An Phát Hưng</title>

    <link rel="icon" type="image/png" href="<?php echo THEME_URI; ?>/images/facorite.png">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=vietnamese" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/vendor/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/css/site.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="<?php echo THEME_URI; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/vendor/wow/wow.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/js/site.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="top-area">
        <div class="col-sm-12 d-flex justify-content-between">
            <div class="nav-left">
                <a href="https://www.facebook.com/SanAnPhatHung/"><img src="<?php echo THEME_URI; ?>/images/icon/facebook-logo.png"/></a>
                <a href="https://youtu.be/IHLfNiriKSc"><img src="<?php echo THEME_URI; ?>/images/icon/youtube-logo.png"/></a>
                <a href="tel:<?php echo get_option('gi_option_hotline'); ?>"><img src="<?php echo THEME_URI; ?>/images/icon/call-icon.png"/></a>
                <a href="mailto:<?php echo get_option('gi_option_email'); ?>"><img src="<?php echo THEME_URI; ?>/images/icon/email-icon.png"/></a>
            </div>
            <div class="nav-right">
                <div class="fb-like" data-href="https://www.facebook.com/SanAnPhatHung/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <div class="navbar-main-container">
        <nav class="navbar-main navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <button id="silde-toggler" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="slide-collapse" data-target="#navbar-top"
                    aria-controls="navbar-top" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="logo" src="<?php echo THEME_URI; ?>/images/logo.jpg">
                </a>
                <?php 
                    wp_nav_menu( array(
                        'theme_location'    => 'primary-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'navbar-collapse offcanvas-collapse',
                        'container_id'      => 'navbar-top',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                        ) );
                ?>
            </div>
            
        </nav>
    </div>
    <div class="menu-overlay"></div>

    <?php
    if (is_home()):
        show_slide();
    else:
    ?>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<ol id="breadcrumbs" class="breadcrumb">','</ol>');
                        } 
                        ?> 
                    </nav> 
                </div>
            </div>
            
        </div>
    </div>
    <?php
    endif;
    ?>
    