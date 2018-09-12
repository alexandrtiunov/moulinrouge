;(function ($) {
    $(function () {

        $('.carousel').carousel({
            interval: 5000
        });

        /*-----------плавный скролл----------------*/
        $("#btn-wedding-dresses, #btn-evening-dresses, #btn-wedding-veils, #btn-belts, #btn-decorations, #btn-garters, #btn-mantlets, #btn-bolero, #btn-shoes, #btn-gloves, #btn-corsets, #btn-welcome, #btn-about-us, #btn-contacts, #btn-shares").on("click", function (e) {
            let anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 777);
            e.preventDefault();
        });

        /*-----------стрелка вверх---------------*/
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });

        $('.scroll-up').click(function () {
            $("html, body").animate({scrollTop: 0}, 600);
            return false;
        });
    });
})(jQuery);

/*--------карта---------*/

function initMap() {
    var myLatLng = {lat: 48.7397730, lng: 37.5864855},

        centerPlace = {lat: 48.7397730, lng: 37.5864855},

        infoWindowFashion = document.getElementById('info-window'),

        map = new google.maps.Map(document.getElementById('map'), {
            center: centerPlace,
            zoom: 17,
            disableDefaultUI: true
        }),

        infoWindow = new google.maps.InfoWindow({
            content: infoWindowFashion
        }),

        marker = new google.maps.Marker({
            size: new google.maps.Size(150, 150),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(100, 100),
            map: map,
            position: myLatLng,
            title: 'Welcome :)',
            animation: google.maps.Animation.DROP
        });

    marker.addListener('click', function () {
        infoWindow.open(map, marker);
    });

    // $.getJSON("js/map-style.json", function(data) {
    //      map.setOptions({styles: data});
    // });
}


// function initMap() {
//     let MonticelloPlace = {lat: 40.6804484, lng: -73.9445065},
//         centerPlace = {lat: 40.6754484, lng: -73.9445065},
//         infoWindowMonticello = document.getElementById('info-window'),
//         map = new google.maps.Map(document.getElementById('map'), {
//             center: centerPlace,
//             zoom: 15,
//             disableDefaultUI: true
//         }),
//         markerMonti = new google.maps.Marker({
//             url: 'img/main-logo.png',
//             size: new google.maps.Size(150, 150),
//             origin: new google.maps.Point(0, 0),
//             anchor: new google.maps.Point(17, 34),
//             scaledSize: new google.maps.Size(100, 100),
//             position: MonticelloPlace,
//             map: map,
//             title: 'Welcome :)',
//             icon: markerMonti,
//             animation: google.maps.Animation.DROP
//         }),
//         infoWindowMonti = new google.maps.InfoWindow({
//             content: infoWindowMonticello
//         });
//
//     markerMonti.addListener('click', function() {
//         infoWindowMonti.open(map, markerMonti);
//     });
//
//     // $.getJSON("js/map-style.json", function(data) {
//     //     map.setOptions({styles: data});
//     // });
// }