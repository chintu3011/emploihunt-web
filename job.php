<?php
    
    session_start();
    if(!($_SESSION['tAuthToken'])) {
        header("Location: demo3.php");
    }
$apiUrl = 'https://api.emploihunt.com/api/job/insert_jobs';
$apiToken =$_SESSION['tAuthToken']; // Replace with your actual Bearer token

$vJobTitle =$_GET['vJobTitle'];
$vCompanyName =$_GET['vCompanyName'];
$tDes =$_GET['tDes'];
$vJobLevel =$_GET['vJobLevel'];
$vExperience =$_GET['vExperience'];
$iNumberOfVacancy =$_GET['iNumberOfVacancy'];
$vJobRoleResponsbility =$_GET['vJobRoleResponsbility'];
$tTechnicalSkill =$_GET['tTechnicalSkill'];
$tSoftSkill =$_GET['tSoftSkill'];
$vEducation =$_GET['vEducation'];
$vAddress =$_GET['vAddress'];
$vSalaryPackage =$_GET['vSalaryPackage'];
$vWrokingMode =$_GET['vWrokingMode'];



$data = array(
    'vJobTitle' => $vJobTitle,
    'vCompanyName' => $vCompanyName,
    'tDes' => $tDes,
    'vJobLevel' => $vJobLevel,
    'vExperience' => $vExperience,
    'iNumberOfVacancy' => $iNumberOfVacancy,
    'vJobRoleResponsbility' => $vJobRoleResponsbility,
    'tTechnicalSkill' => $tTechnicalSkill,
    'tSoftSkill' => $tSoftSkill,
    'vEducation' => $vEducation,
    'vAddress' => $vAddress,
    'vSalaryPackage' => $vSalaryPackage,
    'vWrokingMode' => $vWrokingMode,
);

$filePath = 'C:\xampp\htdocs\jobsh\job-portal-website-template.jpg';

$curl = curl_init();



curl_setopt_array($curl, array(
    CURLOPT_URL => $apiUrl . '?vJobTitle=' . urlencode($data['vJobTitle']) . '&vCompanyName=' . urlencode($data['vCompanyName']) . '&tDes=' . urlencode($data['tDes']) . '&vJobLevel=' . urlencode($data['vJobLevel']) . '&vExperience=' . urlencode($data['vExperience']) . '&iNumberOfVacancy=' . urlencode($data['iNumberOfVacancy']) . '&vJobRoleResponsbility=' . urlencode($data['vJobRoleResponsbility']) . '&tTechnicalSkill=' . urlencode($data['tTechnicalSkill']) . '&tSoftSkill=' . urlencode($data['tSoftSkill']) . '&vEducation=' . urlencode($data['vEducation']) . '&vAddress=' . urlencode($data['vAddress']) . '&vSalaryPackage=' . urlencode($data['vSalaryPackage']) . '&vWrokingMode=' . urlencode($data['vWrokingMode']),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => array(
        'tCompanyPic' => curl_file_create($filePath, 'image/jpg', 'tCompanyPic'),
    ),
    CURLOPT_HTTPHEADER => array(
        'accept: application/json',
        'Content-Type: multipart/form-data',
        'Authorization: Bearer ' . $apiToken,
    ),
));

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
} else {
   header("Location: insertjob.php");
   exit();
}

curl_close($curl);

?>

