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
    <div class="top-area"></div>
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
    