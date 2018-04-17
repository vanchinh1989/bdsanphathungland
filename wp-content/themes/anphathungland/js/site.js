wow = new WOW({ offset: 0 });
wow.init();
$(function () {
    /** Banner */
    $(".banner-box").owlCarousel({
        items: 1,
        loop: false,
        autoPlay: true,
        nav: false,
        dots: true
    });
    // Feature
    $(".home-feature-box").owlCarousel({
        loop: false,
        autoPlay: false,
        nav: true,
        dots: false,
        responsive:{
            0: {items:1},
            576: {items:1},
            768: {items:2},
            992: {items:3},
            1200: {items:3}
        }    
    });
    // Testimonial
    $(".home-testimonial-box").owlCarousel({
        loop: false,
        autoPlay: false,
        nav: false,
        dots: true,
        margin: 20,
        responsive:{
            0: {items:1},
            576: {items:1},
            768: {items:1},
            992: {items:2},
            1200: {items:2}
        }    
    });
    
    /** On Body scroll down */
    $(window).scroll(function(e) {
        if ($(".navbar-main").offset().top == 0) {
            $(".navbar-main").removeClass("fixed");
        }
        else {
            $(".navbar-main").addClass("fixed");
        }

        if ($(document).scrollTop() >= $(".portfolio-menu").offset().top) {
            $(".portfolio-menu").addClass("fixed");
        } else {
            $(".portfolio-menu").removeClass("fixed");
        }
    })
    $('body').scrollspy({ target: '.portfolio-menu', offset: 72 })

    /** Mobile Menu */
    $('#silde-toggler').on('click', function() {
        $("#navbar-top").animate({'width': 'toggle'}, 350);
        $("#navbar-top").toggleClass('open')
        $(".menu-overlay").fadeIn(500);
    });
    $(".menu-overlay").click(function(event) {
        $("#silde-toggler").trigger("click");
        $(".menu-overlay").fadeOut(500);
    });
    
    /** Global Scroll to */
    $('.scroll-to').click(function (e) {
        e.preventDefault();
        $("html").animate({scrollTop: $($.attr(this, 'href')).offset().top - 71}, 500);
        //$("body").animate({scrollTop: $($.attr(this, 'href')).offset().top - 71}, 500);
        return false;
    });

    /** Tooltip */
    $('[data-toggle="tooltip"]').tooltip();

});