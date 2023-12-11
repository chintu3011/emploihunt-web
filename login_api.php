<?php

// Retrieve data from the POST request
$data = json_decode(file_get_contents("php://input"), true);

// Check if required data is present
if (isset($data['vMobile']) && isset($data['vFirebaseId'])) {
    $vMobile = $data['vMobile'];
    $vFirebaseId = $data['vFirebaseId'];

    // Your cURL request logic
    $ch = curl_init('https://api.emploihunt.com/api/signin/login_web');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Error during cURL request: ' . curl_error($ch);
    }

    $dataArray = json_decode($response, true);
    $array=$dataArray['data']; 
    $cnt=count($array);

    $authtoken=$dataArray['data']['tAuthToken'];
    session_start();
    $_SESSION['tAuthToken'] = $authtoken;
    curl_close($ch);

    // Handle the $response as needed
    echo $response;
} else {
    // If required data is not present
    echo 'Error: Incomplete data received.';
}

?>
