function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 14.0818005, lng: -87.20681}
    });

    

    // Create the search box and link it to the UI element.
    var input = document.getElementById('origen');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls.push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }

      var orig = places[places.length-1].geometry.location;
      document.getElementById("rutaOrigen").value = orig;

      // Clear out the old markers.
      markers.forEach(function(marker) {
        marker.setMap(null);
      });
      markers = [];

      // For each place, get the icon, name and location.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
        
        // Create a marker for each place.
        markers.push(new google.maps.Marker({
          map: map,
          title: place.name,
          position: place.geometry.location
        }));

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      
    });

    //SEGUNDO BUSCADOR ========================================================================================

    var input2 = document.getElementById('destino');
    var searchBox2 = new google.maps.places.SearchBox(input2);
    map.controls.push(input2);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox2.setBounds(map.getBounds());
    });

    var markers2 = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.

    searchBox2.addListener('places_changed', function() {
      var places = searchBox2.getPlaces();


      if (places.length == 0) {
        return;
      }

      var dest = places[places.length-1].geometry.location;
      document.getElementById("rutaDestino").value = dest;

      // Clear out the old markers.
      markers2.forEach(function(marker) {
        marker.setMap(null);
      });
      markers2 = [];

      


      // For each place, get the icon, name and location.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
        
        
        // Create a marker for each place.
        markers2.push(new google.maps.Marker({
          map: map,
          title: place.name,
          position: place.geometry.location
        }));

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }

      });

      
      
    });

    var buttonRuta = document.getElementById("ruta");

    buttonRuta.addEventListener("click", function(){
        var a = document.getElementById("rutaOrigen").value;
        var b = document.getElementById("rutaDestino").value;
        var a1 = a.replace("(", "");
        var a2 = a1.replace(")","");
        var a3 = a2.replace(" ","");
        var b1 = b.replace("(", "");
        var b2 = b1.replace(")","");
        var b3 = b2.replace(" ","");
        
        calculateAndDisplayRoute(map, a3, b3);
    });
    
    

}

function calculateAndDisplayRoute(map, a, b) {

    var directionsServiceTmp = new google.maps.DirectionsService;
    var directionsDisplayTmp = new google.maps.DirectionsRenderer;

    location_ini = a;
    location_fin = b;

    directionsServiceTmp.route({
        origin: location_ini,
        destination: location_fin,
        optimizeWaypoints: true,
        travelMode: 'DRIVING'
    }, function(response, status) {
        if (status === 'OK') {
            // Aqui con el response podemos acceder a la distancia como texto 
            console.log(response.routes[0].legs[0].distance.text);
            // Obtenemos la distancia como valor numerico en metros 
           console.log(response.routes[0].legs[0].distance.value);
           var distancia = response.routes[0].legs[0].distance.value;

            directionsDisplayTmp.setDirections(response);

            document.getElementById("distancia").value = distancia/1000;
        }
    });
    directionsDisplayTmp.setMap(map);
}