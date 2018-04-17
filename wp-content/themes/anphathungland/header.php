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

    <title>AnPhatHung Land</title>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=vietnamese" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/vendor/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/vendor/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo THEME_URI; ?>/css/site.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="<?php echo THEME_URI; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/vendor/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/vendor/wow/wow.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/js/site.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Navigation -->
    <nav class="navbar-main navbar fixed-top navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <button id="silde-toggler" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="slide-collapse" data-target="#navbar-top"
                aria-controls="navbar-top" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo" src="<?php echo THEME_URI; ?>/images/logo.jpg">
            </a>
            <?php echo gi_nav_menu_primary(); ?>
        </div>
        
    </nav>
    <div class="menu-overlay"></div>

    <?php
    if (is_home()):
    ?>
    <div id="banner" class="banner-box owl-carousel owl-theme">
        <div class="banner-item">
            <div class="absolute-box about-box"></div>
            <div class="image" style="background-image: url(<?php echo THEME_URI; ?>/images/banner/banner-1.jpg)"></div>
        </div>
        <div class="banner-item">
            <div class="absolute-box about-box"></div>
            <div class="image" style="background-image: url(<?php echo THEME_URI; ?>/images/banner/banner-2.png)"></div>
        </div>
    </div> <!--\.banner-->
    <?php
    else:
    ?>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>      
                </div>
            </div>
        </div>
    </div>
    <?php
    endif;
    ?>
    