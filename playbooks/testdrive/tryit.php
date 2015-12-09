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

<!-- Begin Orbitera Widget Code -->
<script type="text/javascript" charset="utf-8">
  var is_ssl = ("https:" == document.location.protocol);
  var setsHost = is_ssl ? "https://www.orbitera.com/c2m/" : "http://www.orbitera.com/c2m/";
  document.write(unescape("%3Cscript src='" + setsHost + "js/widget_over.js?_t="+(new Date).getTime()+"' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript" charset="utf-8">
  var orbitera_widget_options = {};
  orbitera_widget_options.display = "overlay";
  orbitera_widget_options.placement = "hidden"; // "left","hidden"
//  orbitera_widget_options.account = "vormetric";
  orbitera_widget_options.account = "aws-demo-4";
  orbitera_widget_options.page = "OpenShift";
  // Optionally you can specifying the Test Drive to be used with this widget, like this:
  orbitera_widget_options.page = "testdrives/view/34";
  orbitera_widget_options.orbiteraURL = setsHost;
  var orbitera_widget = new OrbiteraWidget.widget(orbitera_widget_options);
</script>
<!-- End Orbitera Widget Code -->


   </head>   
   <body>
 
<!-- Begin: About page -->
<div data-theme="a" id="pageAbout" data-role="page" data-fullscreen="false"><section>

   <script> writeHeader("backhome", "info"); </script>
         
   <div class="content" data-role="content">
      <h3 style="color:orange">Test Drive</h3>
 
      <div style="color:white;" align=justify> 

<h4>1. Sign Up</h4>
<p>
The first step to arrange free access to the OpenShift Test drive is to complete a simple registration form.
Please verify your email via the verfication email sent to your nominated address.
Within ~1 business day, your check your inbox for account approval.
</p>

<input type="button" name="signup" id="signup" value="Signup" rel="external" data-ajax="false"/>

<h4>2. Login</h4>
<p>
Once your account is approved, confirm your account credentials by authenticating using your nominated email address login and password.
</p>

<input type="button" name="login" id="login" value="Login" rel="external" data-ajax="false"/>

<h4>3. Test Drive</h4>
<p>
When you are ready, launch the test drive using the button below.  
Once launched, Test Drives have a life-span of 6 hours. 
If you would like to extend the evaluation, please contact <a href="mailto:spicozzi@redhat.com">Red Hat</a> to arrange a private Pilot.
</p>

<input type="button" name="testdrive" id="testdrive" value="Test Drive" rel="external" data-ajax="false"/>


     </div>

   </div>
   
   <script> writeFooter(); </script>

   </body>
   
<script>

$('#signup').click(function() {
   window.location.href = "https://aws-demo-4.orbitera.com/c2m/customer/signup?_widget=1#signup";
   return false;
});

$('#login').click(function() {
   window.location.href = "https://aws-demo-4.orbitera.com/c2m/customer/signup?_widget=1#login";
   return false;
});

$('#testdrive').click(function() {
   window.location.href = "https://aws-demo-4.orbitera.com/c2m/customer/testDrives/index?_widget=1";
   return false;
});

</script>

</html>

          