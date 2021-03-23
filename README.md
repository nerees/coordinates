# coordinates
calculate nearest coordinate from aray given

Make jquery post to coordinates.php with array of coordinates. 

Array ecample: 

```
$locations = array (
 array (
  "postcode" => "2850",
  "name" => "Aarons Pass",
  "state_code" => "NSW",
  "lat" => "-32.86328",
  "lng" => "149.80375"
 ),
 array (
  "postcode" => "6280",
  "name" => "Abba River",
  "state_code" => "WA",
  "lat" => "-33.68488",
  "lng" => "115.46334"
 ),
 array (
  "postcode" => "6280",
  "name" => "Abbey",
  "state_code" => "WA",
  "lat" => "-33.66077",
  "lng" => "115.25863"
 )
);
```

Don't forget to add HOME coordinates in coordinates.php
```
/*
* set Your HOME location
*/
$base_location = array(
  'lat' => "-31.959138",
  'lng' => "115.858072"
);
```
