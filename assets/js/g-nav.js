$(function(){
    $('.g-nav_button_wrapper').click(function(){
        $(this).toggleClass('active');
        $('.g-nav_wrapper').toggleClass('opened');
    });
    $('.g-nav_wrapper a'),click(function(){
        $('g-nav_button_wrapper').removeClass('active');
        $('.g-nav_wrapper').removeClass('opened');
    });
});