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
            <a class="navbar-brand" href="index.html">
                <img class="logo" src="<?php echo THEME_URI; ?>/images/logo.jpg">
            </a>
            <?php echo gi_nav_menu_primary(); ?>
        </div>
        
    </nav>
    <div class="menu-overlay"></div>
    