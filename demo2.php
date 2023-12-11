<?php

$url = 'https://api.emploihunt.com/api/signin/login_web';

$data = array(
    'vMobile' => '+918469000537',
    'vFirebaseId' => '8kEz78afd5hISgRwuYQROOqs2K02'
);

$options = array(
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'accept: application/json',
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_CUSTOMREQUEST => 'POST',
);

$ch = curl_init($url);
curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$dataArray = json_decode($response, true);
$array=$dataArray['data']; 
$cnt=count($array);

 $authtoken=$dataArray['data']['tAuthToken'];
 session_start();
 $_SESSION['tAuthToken'] = $authtoken;
 header("Location: demo3.php");



curl_close($ch);


// Process $response as needed


?>
