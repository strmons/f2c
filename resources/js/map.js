var map, marker;
function initMap() {
    var coordinates = {lat: 34.6854479, lng: 33.0506248};
    if($("html").width() <= 1000){
        coordinates = {lat: 34.6854479, lng: 33.0531138};
    }
    if($("html").width() <= 800){
        coordinates = {lat: 34.6846363, lng: 33.058092};
    }
    var place = {lat: 34.683507, lng: 33.0581135};
    map = new google.maps.Map(document.getElementById('map'), {
        center: coordinates,
        zoom: 16,
        disableDefaultUI: true,
        scrollwheel: false
    });


    var icon = ($("html").width() > 800)? "/resources/images/map_icon.png" : "/resources/images/map_icon_small.png";

    marker = new google.maps.Marker({
        position: place,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: icon
    });
}

/*function initMap() {
    var coordinates = {lat: 47.212325, lng: 38.933663},

    map = new google.maps.Map(document.getElementById('map'), {
        center: coordinates
    });
}*/