<?php
session_start();
header('content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: /');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers:   Content-Type, X-Requested-With, Accept, Origin, Access-Control-Request-Method, Access-Control-Request-Headers, Authorization	');


$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/json;charset=UTF-8,Access-Control-Allow-Origin: */*',
	)
);


$context  = stream_context_create($opts);
$url = 'https://demo.c2gocard.com/rest/user/checkSession';
$result = file_get_contents($url, false, $context);
$arr = json_decode($result);
echo PHP_EOL;
print_r($arr);




?>
