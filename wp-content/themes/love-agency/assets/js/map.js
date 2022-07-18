(function($){

//Google maps filters
var gmarkers1 = [];
var markers1 = [];
var infowindow = new google.maps.InfoWindow({
    content: ''
});

// Our markers
markers1 = [

    ['0',
    '<p><strong>Nombre del Distribuidor</strong></p><p class="info text-lowercase"><span class="telefono">111222333</span> <br><span class="mail">mail@mail.com</span> <br> <span class="web">www.pagina.com.ar</span> <br><span class="direccion text-capitalize">Dirección 1234</span></p>',
    52.4357808, 4.991315699999973,'car'
    ],

    ['1', 'Title 2', 52.4357808, 4.981315699999973, 'third'],
    ['2', 'Title 3', 52.4555687, 5.039231599999994, 'car'],
    ['3', 'Title 4', 52.4555687, 5.029231599999994, 'second']
];

/**
 * Function to init map
 */

function initialize() {
    var center = new google.maps.LatLng(52.4357808, 4.991315699999973);
    var mapOptions = {
        zoom: 7,
        center: center,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    for (i = 0; i < markers1.length; i++) {
        addMarker(markers1[i]);
    }
}

/**
 * Function to add marker to map
 */

function addMarker(marker) {
    console.log(marker[1]);
    var category = marker[4];
    var title = marker[1];
    var pos = new google.maps.LatLng(marker[2], marker[3]);
    var content = marker[1];

    marker1 = new google.maps.Marker({
        title: title,
        position: pos,
        category: category,
        map: map
    });

    gmarkers1.push(marker1);

    // Marker click listener
    google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
        return function () {
            console.log('Gmarker 1 gets pushed');
            infowindow.setContent(content);
            infowindow.open(map, marker1);
            map.panTo(this.getPosition());
            map.setZoom(15);
        }
    })(marker1, content));
}

/**
 * Function to filter markers by category
 */

filterMarkers = function (category) {
    for (i = 0; i < gmarkers1.length; i++) {
        marker = gmarkers1[i];
        // If is same category or category not picked
        if (marker.category == category || category.length === 0) {
            marker.setVisible(true);
        }
        // Categories don't match 
        else {
            marker.setVisible(false);
        }
    }
}

// Init map
initialize();

})(jQuery);