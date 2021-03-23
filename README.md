# coordinates
calculate nearest coordinate from aray given

Make jquery post to coordinates.php with array of coordinates. 

Array ecample: 

```
$locations = array (
 array (
  "name_or_id" => "lokacija1",
  "lat" => "-32.86328",
  "lng" => "149.80375"
 ),
 array (
  "name_or_id" => "lokacija2",
  "lat" => "-33.68488",
  "lng" => "115.46334"
 ),
 array (
  "name_or_id" => "lokacija3",
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
