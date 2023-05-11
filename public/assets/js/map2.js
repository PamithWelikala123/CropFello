
function initMap() {

                    console.log(data);
                     var start = new google.maps.LatLng(6.828959157721786,80.01828950117186);
                    var destination=new google.maps.LatLng(7.2906,80.6337);

                     var map = new google.maps.Map(document.getElementById('map'), {
                     center: start,
                     zoom: 15,
                     });


                     var directionsService = new google.maps.DirectionsService();
                     var directionsRenderer = new google.maps.DirectionsRenderer();
                     directionsRenderer.setMap(map);

                     var request = {
                     origin: start, 
                     destination: destination, 
                     travelMode: 'DRIVING' 
             };



             directionsService.route(request, function(result, status) {
               if (status === 'OK') {
                 directionsRenderer.setDirections(result);
               }
             });

            }
 
