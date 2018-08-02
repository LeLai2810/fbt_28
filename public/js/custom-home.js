$(document).ready(function(){
    $('.slideshow').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '<i class="fa fa-arrow-right"></i>',
        prevArrow: '<i class="fa fa-arrow-left"></i>',
    });

    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
