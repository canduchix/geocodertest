<?php

require __DIR__ . '/vendor/autoload.php';

$address = 'Chennai, India';
$url = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".urlencode($address)."&sensor=false");
$response = json_decode($url);
  
if ($response->status == 'OK') {
    $latitude = $response->results[0]->geometry->location->lat;
    $longitude = $response->results[0]->geometry->location->lng;
    echo 'Latitude: ' . $latitude;
    echo '<br />';
    echo 'Longitude: ' . $longitude;
} else {
    echo $response->status;
}

echo "probando el nuevo commit"


?>