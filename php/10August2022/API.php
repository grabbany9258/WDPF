<?php
$OpenWeather = ['api_key' => '8fae2167137cdd5a678d8d6ccd1b265d'];
$zip = "98109";
$lat = 23.7755002;
$lon = 90.354709;
$base_url = "https://api.openweathermap.org/data/2.5";
$weather_url = "/weather?lat=" . $lat. "&lon=" . $lon;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";
print_r($weather);

?>