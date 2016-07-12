/**
 * Created by omi001kho on 05/07/2016.
 */
$(document).ready(function() {
    var $body = $('body'),
        $topNav = $('.nav-top'),
        $header = $('header'),
        $goToTop = $('#goToTop');

    $('[data-toggle="tooltip"]').tooltip();

    $('.owl-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items:1,
        margin:0,
        loop:true,
        nav:false,
        autoHeight: true,
        autoplay: true
    });

    $('.typing').inewsticker({
        speed: 7000,
        effect: 'fade',
        dir: 'rtl',
        delay_after: 4000
    });

    $goToTop.on('click',function(e) {
        e.preventDefault();

        $body.animate({
            scrollTop: 0
        }, 300);
    });

    $(window).scroll(function() {
        if($(this).scrollTop() > 80){
            $topNav.addClass("sticky");
            $header.addClass('sticky-header');
        }
        else if($(this).scrollTop() < 20){
            $topNav.removeClass("sticky");
            $header.removeClass('sticky-header');
        }

        if($(this).scrollTop() > 200){
            $goToTop.addClass('active');
        }
        else
        {
            $goToTop.removeClass('active');
        }
    });

});