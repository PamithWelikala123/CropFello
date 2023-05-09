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
    <script src="<?=ROOT?>/assets/js/map.js"></script> 

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

<body onload="initMap()">

                            <!-- <input type="text" id="pickuplocation" name="pickuplocation" placeholder="Select and fetch your location" > -->
                
                            <input type="text" name="p-latitude" id="p-latitude" value="<?php $data['platitude']?>">
                            <input type="text" name="p-longitude" id="p-longitude" value="<?php $data['plongitude']?>">
                            <input type="hidden" id="city1" name="city" value="">
                
                            <!-- <input type="text" id="destination" name="destination" placeholder="From Where journey End...?"  value=""> -->
                
                            <input type="text" name="d-latitude" id="d-latitude" value="<?php $data['sel_lati']?>">
                            <input type="text" name="d-longitude" id="d-longitude" value="<?php $data['sel_longi']?>">
                
                
                
                            <input type="hidden" name="distance" id="distance" value="">
                            <input type="hidden" name="duration" id="duration" value="">
                
                            <div class="requestcrop-map-container">
                                <div id="map"></div>
                            </div>

</body>

</html>
