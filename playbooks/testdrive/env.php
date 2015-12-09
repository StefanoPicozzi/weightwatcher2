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

   <script> writeHeader("backusecases", "info"); </script>
         
   <div class="content" data-role="content">
      <div class="content-primary" id="about">      
         <ul data-role="listview"  id="AboutList" data-inset="true" >

            <li data-role="divider">
               <h4>System Settings</h4>
            </li>            

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     author
                  </div>
                  <div  class="ui-block-b" >
                     Stefano Picozzi
                  </div>                                   
            </li>  

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     version
                  </div>
                  <div  class="ui-block-b" align="middle" >
                     0.1
                  </div>                                   
            </li> 

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     OpenShift Enterprise
                  </div>
                  <div  class="ui-block-b" align="middle" >
                     2.2
                  </div>                                   
            </li> 
            
            <li data-role="divider">
               <h4>Environment Variables</h4>
            </li>            

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $DOMAIN
                  </div>
                  <div  class="ui-block-b" >
                     ose.claytonbrown.com
                  </div>                                   
            </li>  

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $N
                  </div>
                  <div  class="ui-block-b" >
                     7971b01c [replace with your value]
                  </div>                                   
            </li>  

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $BROKER
                  </div>
                  <div  class="ui-block-b" >
                     broker.vpc-$N.$DOMAIN
                  </div>                                   
            </li>  

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $WORKERA
                  </div>
                  <div  class="ui-block-b" >
                     workera.vpc-$N.$DOMAIN
                  </div>                                   
            </li>  

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $WORKERB
                  </div>
                  <div  class="ui-block-b" >
                     workerb.vpc-$N.$DOMAIN
                  </div>                                   
            </li>  
                                         
            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a" >
                     $AMIUSER
                  </div>
                  <div  class="ui-block-b" align="middle">
                     demo
                  </div>                                   
            </li>                   
                             
            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $AMIPASSWORD
                  </div>
                  <div  class="ui-block-b" align="middle" >
                     ********
                  </div>                                   
            </li>                   

            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $DEVUSER
                  </div>
                  <div  class="ui-block-b" align="middle" >
                     bruce
                  </div>                                   
            </li>                   
                             
            <li data-inset="true" >  
               <div class="ui-grid-a">     
                  <div class="ui-block-a">
                     $DEVPASSWORD
                  </div>
                  <div  class="ui-block-b" align="middle" >
                     ********
                  </div>                                   
            </li>   
                                                                                             
         </ul>
      </div
      
   </div>

   <script> writeFooter(); </script>

</section></div>
<!-- End: About section -->



   </body>
</html>

          