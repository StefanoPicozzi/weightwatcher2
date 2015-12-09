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

$request = "
<kie-container>  
  <container-id>watch</container-id> 
  <status/>   
  <release-id>  
    <group-id>com.redhat.demos</group-id> 
    <artifact-id>weightwatchers</artifact-id> <version>1.0</version> 
  </release-id> 
  <resolved-release-id/> 
</kie-container>
";

try {
	
	//setting the curl parameters.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
	// Following line is compulsary to add as it is:
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
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
  		# print "OK. KIE Container already exists.";
  	}
  	
  	if ( $http_status != 200 && $http_status != 400 ) {
  		throw new Exception('Invalid HTTP response '.$http_status.'  Check your FQDN:PORT settings');
  	}
  	
	$xml = simplexml_load_string($data);
	$json = json_encode($xml);
	$arr = json_decode($json,true, JSON_PRETTY_PRINT);
	# echo "<pre>";print_r($arr);echo "</pre>";

} catch(Exception $e) {
	$_SESSION['message'] = 'We are unable to process your request. Please try again later...'.$e;
   	header("Location: error.php");
}

$request = "
<batch-execution lookup=\"watchsession\" >
  <insert-elements return-object=\"false\">
	
<com.redhat.weightwatcher.Fact>
<factid>1</factid>
<facttype>1</facttype>
<factname>Participant</factname>
<factjson>{ \"userid\" : 1, \"username\" : \"bfskinner@behaviorist.org\" }</factjson>
<facttxt>Incoming Participant JSON</facttxt>
</com.redhat.weightwatcher.Fact>
<com.redhat.weightwatcher.Fact>
<factid>2</factid>
<facttype>1</facttype>
<factname>Participant</factname>
<factjson>{ \"userid\" : 2, \"username\" : \"ipavlov@behaviorist.org\" }</factjson>
<facttxt>Incoming Participant JSON</facttxt>
</com.redhat.weightwatcher.Fact>

<com.redhat.weightwatcher.Fact>
<factid>1</factid>
<facttype>1</facttype>
<factname>Goal</factname>
<factjson>{ \"userid\" : 2, \"goalname\" : \"weight\", target : 65, start : 75, low : 60, high : 68 }</factjson>
<facttxt>Incoming Goal JSON</facttxt>
</com.redhat.weightwatcher.Fact>
<com.redhat.weightwatcher.Fact>
<factid>2</factid>
<facttype>1</facttype>
<factname>Goal</factname>
<factjson>{ \"userid\" : 1, \"goalname\" : \"weight\", target : 75, start : 84, low : 70, high : 78 }</factjson>
<facttxt>Incoming Goal JSON</facttxt>
</com.redhat.weightwatcher.Fact>

<com.redhat.weightwatcher.Fact>
<factid>1</factid>
<facttype>1</facttype>
<factname>Observation</factname>
<factjson>{ \"userid\" : 1, \"obsdate\" : \"2015-04-20 07:15:00 EST\", \"obsname\" : \"weight\", \"obsvalue\" : 80 }</factjson>
<facttxt>Incoming Observation JSON</facttxt>
</com.redhat.weightwatcher.Fact>
<com.redhat.weightwatcher.Fact>
<factid>2</factid>
<facttype>1</facttype>
<factname>Observation</factname>
<factjson>{ \"userid\" : 1, \"obsdate\" : \"2015-04-21 08:15:00 EST\", \"obsname\" : \"weight\", \"obsvalue\" : 79 }</factjson>
<facttxt>Incoming Observation JSON</facttxt>
</com.redhat.weightwatcher.Fact>
<com.redhat.weightwatcher.Fact>
<factid>3</factid>
<facttype>1</facttype>
<factname>Observation</factname>
<factjson>{ \"userid\" : 1, \"obsdate\" : \"2015-04-22 09:15:00 EST\", \"obsname\" : \"weight\", \"obsvalue\" : 78 }</factjson>
<facttxt>Incoming Observation JSON</facttxt>
</com.redhat.weightwatcher.Fact>
<com.redhat.weightwatcher.Fact>
<factid>4</factid>
<facttype>1</facttype>
<factname>Observation</factname>
<factjson>{ \"userid\" : 2, \"obsdate\" : \"2015-04-20 05:15:00 EST\", \"obsname\" : \"weight\", \"obsvalue\" : 70 }</factjson>
<facttxt>Incoming Observation JSON</facttxt>
</com.redhat.weightwatcher.Fact>
<com.redhat.weightwatcher.Fact>
<factid>6</factid>
<facttype>1</facttype>
<factname>Observation</factname>
<factjson>{ \"userid\" : 2, \"obsdate\" : \"2015-04-21 06:15:00 EST\", \"obsname\" : \"weight\", \"obsvalue\" : 69 }</factjson>
<facttxt>Incoming Observation JSON</facttxt>
</com.redhat.weightwatcher.Fact>
<com.redhat.weightwatcher.Fact>
<factid>4</factid>
<facttype>1</facttype>
<factname>Observation</factname>
<factjson>{ \"userid\" : 2, \"obsdate\" : \"2015-04-22 07:15:00 EST\", \"obsname\" : \"weight\", \"obsvalue\" : 68 }</factjson>
<facttxt>Incoming Observation JSON</facttxt>
</com.redhat.weightwatcher.Fact>

</insert-elements>
<fire-all-rules/>
<query out-identifier=\"Watch\" name=\"getWatch\"/>
</batch-execution>
";

try {
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
	curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	$data = curl_exec($ch);
	$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$curl_errno= curl_errno($ch);
	curl_close($ch);

  	if ( $http_status != 200 && $http_status != 400 ) {
  		throw new Exception('Invalid HTTP response '.$http_status.'  Check your FQDN:PORT settings');
  	}
  
	$xml = simplexml_load_string($data);
	$json = json_encode($xml);
	$arr = json_decode($json,true, JSON_PRETTY_PRINT);
	
	print "Result";	
	print "<pre>";print_r($arr);echo "</pre>";
	print "End";

	# header('Location: index.php');

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
          