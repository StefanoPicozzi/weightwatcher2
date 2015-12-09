<?php
session_start();

if ( isset($_SESSION['message'] )) {
   $message = filter_var($_SESSION['message'], FILTER_SANITIZE_STRING);
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
      <title>OpenShift V3 TestDrive</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/themes/nudgetheme.min.css" />
      <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
      
      <link rel="stylesheet" href="css/nudge.css" />      
      <script src="js/nudge.js"  ></script>  

   </head>
   <body>
 
<!-- Begin: Error page -->
<div data-theme="a" id="pageError" data-role="page" data-fullscreen="false"><section>
   
   <script> writeHeader("home", "settings")</script>

   <div data-role="content">
      
      <h4> Sorry 'bout that. </h4>
        
      <p> TestDrive has encountered an error.</p>  
      
      <p> 
         <?php echo $message; ?>
      </p>
      
   </div>
   
   <script> writeFooter(); </script>

</section></div>
<!-- End: Help section -->

</body>
 
<script>        
</script>

</html>

          