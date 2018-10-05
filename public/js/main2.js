$(document).ready(function () {

    // слайдер на главной странице
    $('.autoplay').slick({
        infinite: true,
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        centerMode: true,
//текущий слайд по центру
        variableWidth: true,
//установим переменную ширину
        autoplay: true,
        autoplaySpeed: 2000
    });

});