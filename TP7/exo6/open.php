<?php
$queryString = http_build_query([
    'access_key' => 'f9d5f7eb101b63db6c5cbebc84f87d35'
]);

$ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/'.$_POST["info"], $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);
curl_close($ch);

$api_result = json_decode($json, true);

var_dump($api_result);

foreach ($api_result['results'] as $flight) {
    if (!$flight['live']['is_ground']) {
        echo sprintf("%s flight %s from %s (%s) to %s (%s) is in the air.",
            $flight['airline']['name'],
            $flight['flight']['iata'],
            $flight['departure']['airport'],
            $flight['departure']['iata'],
            $flight['arrival']['airport'],
            $flight['arrival']['iata']
            ), PHP_EOL;
    }
}

?>