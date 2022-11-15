<?php

session_start();

$otp = $_POST['otp'];
//$email = $_SESSION["email"];
$email = "raunak.kumar@incture.com";

$url = "https://30be3209trial-trial.integrationsuitetrial-apim.us10.hana.ondemand.com/30be3209trial/platter/validateOTP";
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'email' => $email,
    'otp' => $otp
);
$payload = json_encode(array("user" => $data));

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);
$output = json_decode($result,true);
$result = $output["result"];
$_SESSION[result] = $result;

// Close cURL resource
curl_close($ch);

header("Location: output.php");
?>