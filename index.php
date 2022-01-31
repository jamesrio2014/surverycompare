<?php
/**
 * Campaign: BrendaWashington
 * Created: 2022-01-31 21:31:54 UTC
 */

require 'leadcloak-169ox635w5e9.php';

// ---------------------------------------------------
// Configuration

// Set this to false if application is properly installed.
$enableDebugging = true;

// Set this to false if you won't want to log error messages
$enableLogging = true;

if ($enableDebugging) {
	isApplicationReadyToRun();
}

$data = httpRequestMakePayload($campaignId, $campaignSignature);

$response = httpRequestExec($data);

$handler = httpHandleResponse($response, $enableLogging);

if ($handler) {
	exit();
}

?>