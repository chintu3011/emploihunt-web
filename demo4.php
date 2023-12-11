<?php

$url = "https://api.emploihunt.com/api/job/jobs_by_hrId_withoutpagination";
$ch = curl_init();
$headr = array();


$headr[] = 'Content-length: 0';
$headr[] = 'Content-type: application/json';
$headr[] = 'Authorization: Bearer '.$accesstoken;

curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);



       
?><?php
 $dataArray = json_decode($result, true);
if($dataArray['status']=="500"){
echo "There is no post" ;
} else{

}
?>