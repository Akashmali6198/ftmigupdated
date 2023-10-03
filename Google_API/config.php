<?php
// 	session_start();
	require_once "API/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("451670704877-75gg0p9d3ndjvnog9kdiv6bpa69el59r.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("Technical Suneja");
	$gClient->setRedirectUri(base_url("Google_API/g-callback.php"));
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('localhost', 'ftmig','8JJ~LLV0GJVu' ,'ftmig');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>