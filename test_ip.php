<?php

//$ip = $_SERVER['REMOTE_ADDR'];
$ip = $_REQUEST["ip"];
	$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
//echo $details->country; // -> "US"
var_dump($details);


/*
$ip = $_REQUEST["ip"];
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
var_dump($details);
/*
var_dump($details->geoplugin_city);
var_dump($details->geoplugin_countryName);
*/

?>