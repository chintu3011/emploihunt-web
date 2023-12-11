


<?php

session_start();
    if(!($_SESSION['tAuthToken'])) {
        header("Location: demo3.php");
    }
  $jobId=$_GET['id'];

    $url = "https://api.emploihunt.com/api/job/delete?jobId=$jobId";
  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
    $headers = [];
    $headers[] = 'Content-Type:application/json';
    $token = $_SESSION['tAuthToken'];
    $headers[] = "Authorization: Bearer ".$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
    $result = curl_exec($ch);
    $result = json_decode($result);
  
    curl_close($ch);
  
    print_r($result);
    if (curl_errno($ch)) {
      echo 'Error: ' . curl_error($ch);
  } else {
     header("Location: requirter.php");
     exit();
  }
?>
  