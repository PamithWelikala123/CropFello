

{/* <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo0cnVa0-HmEMm2M5wGXP_DQ37Z2L0teo&libraries=places"></script> */}


let map;
var marker;
var marker_d;
var directionsService;
var directionsRenderer;


    function initMap() {


                        const options = {
                            // componentRestrictions: {country: 'us'}
                        };

                       // const autocomplete = new google.maps.places.Autocomplete(input, options);

                        let srilanka={lat: 7.8731 ,lng: 80.7718};
                        map = new google.maps.Map(document.getElementById('map'), {
                        center: srilanka,
                        zoom: 7.4,
                        });

                        marker = new google.maps.Marker({
                            map: map,
                            draggable: true
                        });


                        var input = document.getElementById("pickuplocation");
                                var autocomplete = new google.maps.places.Autocomplete(input);
                                marker = new google.maps.Marker({
                                map: map,
                                draggable:true,
                                title:"Pickup location"

                                });




                                autocomplete.bindTo("bounds", map);
                                autocomplete.setFields(['address_components','geometry','name'])


                                autocomplete.addListener('place_changed', function () {


                                    // marker.setVisible(false);
                                    const  place = autocomplete.getPlace();

                                    if (!place.geometry) {
                                        // User entered the name of a Place that was not suggested and
                                        // pressed the Enter key, or the Place Details request failed.
                                        window.alert("No details available for input: '" + place.name + "'");
                                        return;
                                    }

                                    // If the place has a geometry, then present it on a map.
                                    if (place.geometry.viewport) {
                                        map.fitBounds(place.geometry.viewport);
                                    } else {
                                        map.setCenter(place.geometry.location);
                                        map.setZoom(17);  // Why 17? Because it looks good.
                                    }
                                    marker.setPosition(place.geometry.location);
                                    marker.setVisible(true);
                                   // updateLocationField(place.formatted_address);


                                });






                                google.maps.event.addListener(marker,'position_changed',
                                    function () {
                                      
                                        document.getElementById('p-latitude').value=marker.position.lat();
                                        document.getElementById('p-longitude').value=marker.position.lng();
                                         console.log(marker.position.lat()+'  '+marker.position.lng()+'--->')
                                    }
                                );


                                marker.addListener('dragend', function() {
                                        const geocoder = new google.maps.Geocoder();
                                        geocoder.geocode({'location': marker.getPosition()}, function(results, status) {
                                            if (status === 'OK') {
                                                if (results[0]) {
                                                    map.setZoom(14);
                                                    map.setCenter(marker.getPosition());


                                                    const cityComponent = results[0].address_components.find(c => c.types.includes('locality'));
                                                    const cityName = cityComponent ? cityComponent.long_name : null;
                                                    console.log(cityName);
                                                    document.getElementById('city1').value=cityName;


                                                    updateLocationField(results[0].formatted_address);
                                                } else {
                                                    window.alert('No results found');
                                                }
                                            } else {
                                                window.alert('Geocoder failed due to: ' + status);
                                            }
                                        });
                                });



                        var input_des = document.getElementById("destination");
                                var autocomplete_des = new google.maps.places.Autocomplete(input_des);


                                marker_d = new google.maps.Marker({
                                map: map,
                                draggable:true,
                                title:"Destination"
                                });

                                autocomplete_des.bindTo("bounds", map);
                                autocomplete_des.setFields(['address_components','geometry','name'])

                                autocomplete_des.addListener('place_changed', function () {
                                    // marker.setVisible(false);
                                    var place_d = autocomplete_des.getPlace();
                                    if (!place_d.geometry) {
                                        // User entered the name of a Place that was not suggested and
                                        // pressed the Enter key, or the Place Details request failed.
                                        window.alert("No details available for input: '" + place_d.name + "'");
                                        return;
                                    }

                                    // If the place has a geometry, then present it on a map.
                                    if (place_d.geometry.viewport) {
                                        map.fitBounds(place_d.geometry.viewport);
                                    } 
                                    else {
                                        map.setCenter(place_d.geometry.location);
                                        map.setZoom(17);  // Why 17? Because it looks good.
                                    }
                                    marker_d.setPosition(place_d.geometry.location);
                                    marker_d.setVisible(true);
                                });


                                google.maps.event.addListener(marker_d,'position_changed',
                                    function () {
                                        document.getElementById('d-latitude').value=marker_d.position.lat();
                                        document.getElementById('d-longitude').value=marker_d.position.lng();
                                        console.log(marker_d.position.lat()+'  '+marker_d.position.lng())
                                        calculateAndDisplayRoute();
                                    }
                                );



                                marker_d.addListener('dragend', function() {
                                        const geocoder = new google.maps.Geocoder();
                                        geocoder.geocode({'location': marker_d.getPosition()}, function(results, status) {
                                            if (status === 'OK') {
                                                if (results[0]) {
                                                    map.setZoom(14);
                                                    map.setCenter(marker_d.getPosition());
                                                    updateLocationField2(results[0].formatted_address);
                                                } else {
                                                    window.alert('No results found');
                                                }
                                            } else {
                                                window.alert('Geocoder failed due to: ' + status);
                                            }
                                        });
                                });
                            
}






function calculateAndDisplayRoute() {
                                // Create a directions service object
                                var directionsService = new google.maps.DirectionsService();

                                // Create a directions renderer object
                                directionsDisplay = new google.maps.DirectionsRenderer();

                                // Set the map for the directions renderer
                                directionsDisplay.setMap(map);

                                // Define the origin, destination, and travel mode for the route
                                var request = {
                                    origin: marker.getPosition(),
                                    destination: marker_d.getPosition(),
                                    travelMode: 'DRIVING'
                                };

                                // Call the directions service to calculate the route
                                directionsService.route(request, function(result, status) {
                                    if (status === 'OK') {
                                    // Display the route on the map
                                    directionsDisplay.setDirections(result);
                                    var distance = result.routes[0].legs[0].distance.text;
                                    var durationInSeconds = result.routes[0].legs[0].duration.value;
                                    var hours = Math.floor(durationInSeconds / 3600);
                                    var minutes = Math.floor((durationInSeconds % 3600) / 60);
                                    var seconds = durationInSeconds % 60;

                                    // Format the duration as hh:mm:ss
                                    var duration = hours.toString().padStart(2, '0') + ':' +
                                            minutes.toString().padStart(2, '0') + ':' +
                                            seconds.toString().padStart(2, '0');
                                    document.getElementById('distance').value=distance;
                                    document.getElementById('duration').value=duration;
                                    console.log('Shortest road duration: ' + duration+'   distance= '+distance);
                                    } 
                                    else {
                                    console.error('Error calculating route:', status);
                                    }
                                });
}


function updateLocationField(value) {
        document.getElementById('pickuplocation').value = value;
    }

    function updateLocationField2(value) {
        document.getElementById('destination').value = value;
    }


