$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 2000);
        return false;
    });

    // scroll body to down
    $('#contact').click(function () {
        $('#contact').tooltip('hide');
        var down = $(document).height();
        $('body,html').animate({
            scrollTop: down - 750
        }, 2000);
        return false;
    });

    $('body').scrollspy({target: '#nav'})

    $('#back-to-top').tooltip();
    $('#contact').tooltip();
    $('a').tooltip();
    $('#nav').affix({
        offset: {
            top: $('header').height() - $('#nav').height()
        }
    });


    /* google maps */

// enable the visual refresh
google.maps.visualRefresh = true;

var map;
function initialize() {
    var mapOptions = {
        zoom: 15,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
        // try HTML5 geolocation
        if (navigator.geolocation) {

            var pos = new google.maps.LatLng(49.09407, 6.22618);
            var marqueur = new google.maps.Marker({
                position: pos,
                map: map
            })

            var infowindow = new google.maps.InfoWindow({
                map: map,
                position: pos
            });

            map.setCenter(pos);

        } else {
            // browser doesn't support geolocation
            content: 'Erreur: votre navigateur ne peut afficher la position';
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});


