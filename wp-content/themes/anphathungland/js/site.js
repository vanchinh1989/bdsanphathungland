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
            1200: {items:4}
        }    
    });
    // Testimonial
    $(".home-testimonial-box").owlCarousel({
        loop: true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        nav: false,
        dots: true,
        margin: 20,
        responsive:{
            0: {items:3},
            576: {items:3},
            768: {items:3},
            992: {items:5},
            1200: {items:5}
        }    
    });
    
    /** On Body scroll down */
    $(window).scroll(function(e) {
        if ($(document).scrollTop() >= $(".navbar-main").offset().top) {
            $(".navbar-main").addClass("fixed");
        }
        else {
            $(".navbar-main").removeClass("fixed");
        }
    })
    $('body').scrollspy({ target: '.portfolio-menu', offset: 72 })

    /** Mobile Menu */
    $('#silde-toggler').on('click', function() {
        if (!$(".menu-overlay").hasClass('open')) {
            $("#navbar-top").addClass('open')
            $(".menu-overlay").fadeIn(500);
        } else {
            $("#navbar-top").removeClass('open')
            $(".menu-overlay").fadeOut(500);
        }
    });
    $(".menu-overlay").click(function(event) {
        $("#navbar-top").removeClass('open')
        $(".menu-overlay").fadeOut(500);
    });
    
    /** Global Scroll to */
    $('.scroll-to').click(function (e) {
        e.preventDefault();
        $("html").animate({scrollTop: $($.attr(this, 'href')).offset().top - 71}, 500);
        $("body").animate({scrollTop: $($.attr(this, 'href')).offset().top - 71}, 500);
        return false;
    });

    /** Tooltip */
    $('[data-toggle="tooltip"]').tooltip();

});