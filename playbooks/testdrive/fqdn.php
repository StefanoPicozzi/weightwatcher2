<?php

session_start();
	
$fqdn = "weightwatcher.cloudapps.example.com";
if ( isset($_SESSION['fqdn']) ) {
	$fqdn = $_SESSION['fqdn'];
} else {
	$_SESSION['fqdn'] = $fqdn;
}

?>


<!doctype html>
<!--[if IE 7 ]>       <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>       <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>       <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en-US">
   <!--<![endif]-->

<html lang="en">
   <head>
      <title>AWS OpenShift Test Drive</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/themes/testdrivetheme.min.css" />
      <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
<!--
 	  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
-->

      <link rel="stylesheet" href="css/jquery.mobile.structure-1.4.0.min.css"/>
      <script src="js/jquery-1.10.2.min.js" ></script>
      <script src="js/jquery.mobile-1.4.0.min.js"></script>

      <link rel="stylesheet" href="css/testdrive.css" />
      <script src="js/testdrive.js"  ></script>

   </head>
   <body>


<!-- Begin: FQDN Page -->
<section id="pageFQDN" data-role="page">

   <script> writeHeader("backhome", "info")</script>

   <div class="content" data-role="content">

      <form id="register" action="fqdn_submit.php" method="get"  rel="external" data-ajax="false">
         <div data-role="fieldcontain">

            <fieldset data-role="controlgroup">
            <legend style="color:white;">FQDN:PORT Entry</legend>

            <div data-role="fieldcontain">
            <label for="fqdn" style="color:white;">FQDN:PORT</label>
               <input type="text" name="fqdn" id="fqdn" class="fqdn" value="<?php echo $fqdn; ?>" data-mini="true" >
            </div>

            </fieldset>

           <center>
              <input type="submit" name="submit" id="submit" value="Submit" data-inline="true">
           </center>

         </div>
         </form>

   </div>

   <script> writeFooter(); </script>

</section>
<!-- End: FQDN Page -->

   </body>
</html>
