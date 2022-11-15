<?php

session_start();

$email = $_POST['email'];

$_SESSION["email"] = $email;

$url = "https://30be3209trial-trial.integrationsuitetrial-apim.us10.hana.ondemand.com/30be3209trial/platter/generateOTP";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array("Content-Type: text/plain",);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

curl_setopt($curl, CURLOPT_POSTFIELDS, $email);

curl_exec($curl);
curl_close($curl);

header("Location: login.php");
?>