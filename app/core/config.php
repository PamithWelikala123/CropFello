<?php 

if($_SERVER['SERVER_NAME'] == 'localhost'){

    define('DBNAME','cropfello');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER','');

    define('ROOT', 'http://localhost:8080/Cropfello/public');
    define('ROOT1', 'http://localhost:8080/Cropfello/app');
    define('APPROOT',dirname(dirname(__FILE__)));
    define('AUTO_MAP_URL','https://maps.googleapis.com/maps/api/js?key=AIzaSyCo0cnVa0-HmEMm2M5wGXP_DQ37Z2L0teo&callback=initMap&libraries=places&v=weekly');

}else{
    define('ROOT', 'https://www.mywebsite.com');
}

define('APP_NAME', "CropFello");
define('APP_DESC', "It is all about crops");

define('DEBUG',true);

?>