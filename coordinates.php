<?php
/*
* set Your HOME location
*/
$base_location = array(
  'lat' => "-31.959138",
  'lng' => "115.858072"
);

//get locations array from post
if (isset($_POST['locations']))
//if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['locations']))
{

    $locations = $_POST['locations'];
    
    // calculate

    //distances array from POSTED data
    $distances = array();

    foreach ($locations as $key => $location)
    {
        $delta_lat = $base_location['lat'] - $location['lat'];
        $delta_lng = $base_location['lng'] - $location['lng'];
        $mean_lat = ($location['lat'] + $base_location['lat']) / 2;
        $distance = ($delta_lat**2) + ((cos($mean_lat) * $delta_lng)**2);

        $earth_radius_km = 6371.009;
        $actual_distance = $earth_radius_km * sqrt($distance);
        $distances[$key] = $actual_distance;
    }

    $closest = $locations[key($distances)];
    echo $closest;
    //return $closest;
}    