<?php

session_start();
	
if ( isset($_SESSION['fqdn']) ) {
	$fqdn = $_SESSION['fqdn'];
} else {
   	header("Location: fqdn.php");	
}

$url = "http://".$fqdn."/kie-server/services/rest/server/containers/watch";
$username  = "erics";
$password = "jbossbrms1!";

try {
	
	//setting the curl parameters.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
	// Following line is compulsary to add as it is:
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	$data = curl_exec($ch);
	$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$curl_errno= curl_errno($ch);
	curl_close($ch);

  	if ( $http_status == 400 ) {
  		print "OK. KIE Container already exists.";
  	}
  	
  	if ( $http_status != 200 && $http_status != 400 ) {
  		throw new Exception('Invalid HTTP response '.$http_status.'  Check your FQDN:PORT settings');
  	}
  	
	$xml = simplexml_load_string($data);
	$json = json_encode($xml);
	$arr = json_decode($json,true, JSON_PRETTY_PRINT);
	print "Result";
	print "<pre>";print_r($arr);echo "</pre>";
	print "End";
	
} catch(Exception $e) {
	$_SESSION['message'] = 'We are unable to process your request. Please try again later...'.$e;
   	header("Location: error.php");
}
?>


<html lang="en">
<head>
   <title>Login Submit Page</title>
   
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
   <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
   <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
   <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

<style>
</style>

<body>

</body>
</html>
          