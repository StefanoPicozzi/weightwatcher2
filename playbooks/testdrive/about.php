<?php
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
 
<!-- Begin: About page -->
<div data-theme="a" id="pageAbout" data-role="page" data-fullscreen="false"><section>

   <script> writeHeader("backhome", "info"); </script>
         
   <div class="content" data-role="content">
      <h3 style="color:orange">About</h3>
 
      <div style="color:white;" align="justify"> 
<p>
Welcome to the OpenShift Enterprise by Red Hat Test Drive companion for the weighwatcher2 demo.
Weightwatcher is a stateless complex event processing decision server that showcases a rules-as-a-service application 
which reasons over incoming weight observation to output insights such as weight change over an interval.
A comprehensive write-up of the weightwatcher demo is available in the docs location at <a href="https://github.com/StefanoPicozzi/weightwatcher2">GitHub repository</a>
</p>

<p>
To execute these test case, first <a href="fqdn.php" data-ajax="false">Set the FQDN:PORT</a> that hosts your targeted weightwatcher application instance.  
</p>

<p>
You can then test a sample invocation clicking the <a href="postfacts.php" data-ajax="false"> Post Facts</a> menu option.  
This will send a payload of weight observations to the Decision Server.  
The service will then reason over these facts and return a payload of insights as an XML response payload
</p>

<p>
The other menu options one the home page are optional and feature examples of Decision Server API invocations. 
An explanation of what these do can be found at the Decision Server option of the <a href="help.php#pageResources" data-ajax="false"> Resource menu.</a>
</p>

     </div>

   </div>
   
   <script> writeFooter(); </script>

   </body>
</html>

          