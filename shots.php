<?php

$url = 'http://api.probasketballapi.com/shots';

$api_key = json_decode(file_get_contents('key.json'),true)['key'];

$player_id = $_GET['player_id'];

$query_string = "api_key=$api_key&player_id=$player_id&year=2015";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

curl_close($ch);

echo $result;

?>