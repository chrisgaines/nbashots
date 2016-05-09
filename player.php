<?php

$url = 'http://api.probasketballapi.com/player';

$api_key = json_decode(file_get_contents('key.json'),true)['key'];

$player_name = $_GET['name'];

$names = explode(' ', $player_name);

$first_name = $names[0];
$last_name = $names[1];

$query_string = "api_key=$api_key&first_name=$first_name&last_name=$last_name";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

curl_close($ch);

echo $result;

?>