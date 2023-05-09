<!DOCTYPE html>
<html>
<head>
    <title>Location Picker</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/filepond@^4/dist/filepond.css' rel='stylesheet' />
    <link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


    <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>
    <!-- <script src="<?=ROOT?>/assets/js/map2.js"></script>  -->




<style>
    
     #map {
            width: 100%;
            height: 900px;
            border-radius: 10px;
        }
        .map-container{
            width: 100%;
            height: 80%;
            border-radius: 10px;
            margin-top: 2%;
        }
</style>


</head>



<body  onload="initMap()">

<?php
		$data['sel_lati'];
?>


<script>
    
console.log(<?php echo json_encode($data['sel_lati']); ?>);

let marker;
function initMap() {


                    var start = new google.maps.LatLng(<?php echo json_encode($data['sel_lati1']); ?>,<?php echo json_encode($data['sel_longi2']); ?>);
                   var destination=new google.maps.LatLng(<?php echo json_encode($data['sel_lati']); ?>,<?php echo json_encode($data['sel_longi']); ?>);

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
                var distance = result.routes[0].legs[0].distance.text;
                document.getElementById('distance').value=distance;
                console.log('distance= '+distance);
              }
            });
          }





</script>

                            <!-- onload="initMap()" -->

                            <!-- <input type="text" id="pickuplocation" name="pickuplocation" placeholder="Select and fetch your location" > -->
                
                            <!-- <input type="hidden" name="p-latitude" id="p-latitude" value="<//?php echo $data['platitude']?>">
                            <input type="hidden" name="p-longitude" id="p-longitude" value="<//?php echo $data['plongitude']?>">
                            <input type="hidden" id="city1" name="city" value="">
                
                             <input type="text" id="destination" name="destination" placeholder="From Where journey End...?"  value=""> -->
                
                            <!-- <input type="hidden" name="d-latitude" id="d-latitude" value="<//?php echo $data['sel_lati']?>">
                            <input type="hidden" name="d-longitude" id="d-longitude" value="<//?php echo $data['sel_longi']?>">
                
                
                
                            <input type="hidden" name="distance" id="distance" value="">
                            <input type="hidden" name="duration" id="duration" value="">
                
                            <div class="requestcrop-map-container">
                                <div id="map"></div>
                            </div> --> 

                            <!-- <script>var start = new google.maps.LatLng(6.828959157721786,80.01828950117186);</script> -->

                            <input type="hidden" name="distance" id="distance" value="">
                            <input type="hidden" name="duration" id="duration" value="">
 <div id="map"></div>




</body>




</html>
