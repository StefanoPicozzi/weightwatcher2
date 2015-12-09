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
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
      
      <link rel="stylesheet" href="css/testdrive.css" />      
      <script src="js/testdrive.js"  ></script>  
   </head>
   <body>
 
<!-- Begin: About page -->
<div data-theme="a" id="pageAbout" data-role="page" data-fullscreen="false"><section>

   <script> writeHeader("backusecases", "home"); </script>
         
   <div class="content" data-role="content">
      <h3 style="color:orange">eBook</h3>
 
      <div style="color:white;" align=justify> 

<p>
A Getting Started with OpenShift eBook from O'Reilly press is available for free download.  
The book contains many further detailed and fun experiments you can conduct on the OpenShift platform.
Please note that the examples cited use OpenShift Online as the target OpenShift instance.
</p>
<p> 
To change to use your private PaaS created as part of your AWS Test Drive, 
simply run rhc setup as per below replacing $broker with your assigned broker FQDN.
</p>

<pre>
# Replace $broker with broker.vpc-NNNNNNNN.bruce-ose.com
$ rhc setup --server $broker
</pre>

<input type="button" name="ebook" id="ebook" value="eBook" rel="external" data-ajax="false"/>

     </div>

   </div>
   
   <script> writeFooter(); </script>

   </body>
   
<script>

$('#request').click(function() {
    window.location.href = "https://www.openshift.com/promotions/ebook";
    return false;
});

</script>

</html>

          