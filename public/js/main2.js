$(document).ready(function () {

    $('.multiple-slide').slick({
        infinite: true,
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        centerMode: true,
//текущий слайд по центру
        variableWidth: true
//установим переменную ширину
    });

    // $('.multiple-slide').slick({
    //     infinite: true,
    //     dots: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 1
    // });

});