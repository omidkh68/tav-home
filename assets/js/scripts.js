/**
 * Created by omi001kho on 05/07/2016.
 */
$(document).ready(function() {
    var $body = $('body'),
        $topNav = $('.nav-top'),
        $header = $('header');

    $('[data-toggle="tooltip"]').tooltip();
    $(window).scroll(function() {
        if($(this).scrollTop() > 80){
            $topNav.addClass("sticky");
            $header.addClass('sticky-header');
        }
        else if($(this).scrollTop() < 20){
            $topNav.removeClass("sticky");
            $header.removeClass('sticky-header');
        }
    });

});