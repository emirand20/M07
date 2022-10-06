<?php
$server = [
    "request_uri" => "/hola/luis"
];

$request_uri=$server['request_uri']; //almacenamos todo el request_uri

$arr = explode("/",$request_uri);
array_shift($arr);
foreach ($arr as $value) {
    echo($value);
    echo('<br/>');
}
// array_push($arr, $server["request_uri"]);
// var_dump($arr);
