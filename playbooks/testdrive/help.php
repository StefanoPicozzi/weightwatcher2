<!doctype html>
<!--[if IE 7 ]>       <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>       <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>       <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en-US">
   <!--<![endif]-->

<html lang="en">
   <head>
      <title>The testdrive Machine</title>

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
 
<!-- Begin: Help page -->
<div data-theme="a" id="pageHelp" data-role="page" data-fullscreen="false" ><section>
   
   <script> writeHeader("backhome", "home")</script>

   <div data-role="content">
      <div class="content-primary" id="Settings">
         <ul data-role="listview"  id="SettingsList" data-icon="arrow-r" data-inset="true" >
            <li data-role="divider"> <h4>Help Menu </h4> </li>
            <li> <a href="contact.php" data-ajax="false">Contact </a> </li>
            <li> <a href="#pageGlossary">Glossary
               <span class="ui-li-count"> 2 </script></span></a> 
            </li>
            <li> <a href="#pageResources">Resources 
               <span class="ui-li-count"> 16 </script></span></a>
             </li>
         </ul>
      </div>
   </div>
   
   <script> writeFooter(); </script>

</section></div>
<!-- End: Help section -->

<!-- Begin: Glossary page -->
<div data-theme="a" id="pageGlossary" data-role="page" data-fullscreen="false" ><section>
   
   <script> writeHeader("backhelp", "home")</script>

   <div data-role="content">
      <div class="content-primary" id="Settings">
         <ul data-role="listview"  id="SettingsList" data-icon="arrow-r" data-inset="true" >
            <li data-role="divider"> <h4>Glossary </h4> </li>
            <li> <a href="#pageOSETerms">OpenShift</a> </li>
            <li> <a href="#pageAWSTerms">Miscellaneous</a> </li>
         </ul>
      </div>
   </div>
   
   <script> writeFooter(); </script>

</section></div>
<!-- End: Glossary section -->

<!-- Begin: AWSTerms Page -->
<div data-theme="a" id="pageAWSTerms" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>
      
   <div data-role="content">
      <div class="content-primary" id="Terms">
         <ul data-role="listview" data-filter="true" id="TermsList" data-icon="arrow-r" data-inset="true" >
            
            <li data-role="divider">
               Terminology
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Amazon Web Services
                  </h4>
                     <p align=justify style="white-space:normal;">
Amazon Web Services (AWS) is a collection of remote computing services, also called web services, 
that make up a cloud computing platform by Amazon.com. 
The most central and well-known of these services are Amazon EC2 and Amazon S3. 
<a href="http://en.wikipedia.org/wiki/Amazon_Web_Services">Wikipedia</a>
                   </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Test Drives
                  </h4>
                     <p align=justify style="white-space:normal;">
AWS Test Drive provides a private IT sandbox environment containing preconfigured server based solutions. 
In under an hour, and using a step-by-step lab manual and video, launch, login and learn about these popular 3rd party IT solutions, powered by AWS and CloudFormation.
Test Drives are developed by AWS Partner Network (APN) Consulting and Technology Partners and are provided free of charge in return for your registration with the Partner that built the Test Drive.
Each Test Drive includes enough free AWS datacenter time to experience using the IT solution, crafted by the industry’s leading System Integrators (SIs) and Independent Software Vendors (ISVs).  
If you like the Test Drive you can request a private Pilot of the system from the Test Drive Partner.
                   </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Amazon Machine Image
                  </h4>
                     <p align=justify style="white-space:normal;">         
An Amazon Machine Image (AMI) is a special type of virtual appliance that is used to instantiate (create) 
a virtual machine within the Amazon Elastic Compute Cloud ("EC2"). 
It serves as the basic unit of deployment for services delivered using EC2.
<a href="en.wikipedia.org/wiki/Amazon_Machine_Image">Wikipedia</a>
                   </p>
               </div>
            </li>
            
            <li>
               <div data-role="collapsible">
                  <h4>
FQDN
                  </h4>
                     <p align=justify style="white-space:normal;">         

A fully qualified domain name (FQDN) is the complete domain name for a specific computer, or host, on the Internet. 
The FQDN consists of two parts: the hostname and the domain name. 
For example, an FQDN for a hypothetical mail server might be mymail.somecollege.edu.
<a href="https://kb.iu.edu/d/aiuv">https://kb.iu.edu/d/aiuv</a>
                   </p>
               </div>
            </li>
                        
   </div>
   
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: AWSTerms Page -->
              

<!-- Begin: OSETerms Page -->
<div data-theme="a" id="pageOSETerms" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>
      
   <div data-role="content">
      <div class="content-primary" id="Terms">
         <ul data-role="listview" data-filter="true" id="TermsList" data-icon="arrow-r" data-inset="true" >
            
            <li data-role="divider">
               Terminology
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Platform as a Service
                  </h4>
                     <p align=justify style="white-space:normal;">
Platform as a service is the cloud service rendition of application infrastructure (middleware), 
the foundation technology for business applications. CIOs, IT planners and architects rely on public, 
private and hybrid platform as a service (PaaS) in their digital business technology decisions.
<a href="https://www.gartner.com/doc/2833022/platform-service-definition-taxonomy-vendor">Gartner</a>                     
</p>
               </div>
            </li>
            
            
            <li>
               <div data-role="collapsible">
                  <h4>
OpenShift Enterprise
                  </h4>
                     <p align=justify style="white-space:normal;">
OpenShift Enterprise by Red Hat is an on-premise, 
private platform as a service solution offering that allows you to deliver apps faster and meet your enterprise's growing application demands. 
With Red Hat's award-winning private Platform as a Service, OpenShift Enterprise, 
you can improve developer productivity, increase operational efficiency, and expand your hardware utilization.  
OpenShift can run anywhere Red Hat Enterprise Linux is supported including the Amazon Web Services (AWS) public cloud infratructure.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Docker 
                  </h4>
                     <p align=justify style="white-space:normal;">
A container management and image deployment service.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>            
Kubernetes
                  </h4>
                     <p align=justify style="white-space:normal;">
An orchestrator and schedule for container based applications in the OpenShift Enterprise environment.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Registry 
                  </h4>
                     <p align=justify style="white-space:normal;">

Provides storage of and management access to container images.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>                  	
Pods
                  </h4>
                     <p align=justify style="white-space:normal;">

A Kubernetes term that means an application or instance of something (may include 1 or more containers).
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Project 
                  </h4>
                     <p align=justify style="white-space:normal;">
A place to group together various elements of OpenShift applications. Project have multiple characteristics such as resource quotas/constraints, policies, user access, etc
Router: An ingress poit for traffic destined for OSE services. The router is a container that can run on any node in your environment.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Route
                  </h4>
                     <p align=justify style="white-space:normal;">
Matches FQDN-destined traffic requests to services and the pods they represent, mapping internal and external IPs as well as ports.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Service
                  </h4>
                     <p align=justify style="white-space:normal;">
Defines a logical set of pods and the policy by which to access them.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Scheduler
                  </h4>
                     <p align=justify style="white-space:normal;">
Schedules workloads on available nodes based on various rules.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Replication Controller
                  </h4>
                     <p align=justify style="white-space:normal;">
Controls how many instances of a pod or service need to be started. Also handles instance restarts.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Templates
                  </h4>
                     <p align=justify style="white-space:normal;">
JSON files that define a complete application to Kubernetes.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Master
                  </h4>
                     <p align=justify style="white-space:normal;">
The host or hosts that contain OpenShift Enterprise control components, including the API server, controller manager server, and etcd. The master manages nodes in its Kubernetes cluster and schedules pods to run on nodes.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Nodes 
                  </h4>
                     <p align=justify style="white-space:normal;">
Provide the runtime environments for containers. Each node in a Kubernetes cluster has the required services to be managed by the master. Nodes also have the required services to run pods, including Docker, a kubelet and a service proxy.
                     </p>
               </div>
            </li>




                             
                                    
         </ul>
   </div>
   
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Terms Page -->
            
            



<!-- Begin: FAQ Page -->
<div data-theme="a" id="pageFAQ" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>
      
   <div data-role="content">
      <div class="content-primary" id="Terms">
         <ul data-role="listview" data-filter="true" id="TermsList" data-icon="arrow-r" data-inset="true" >
            <li data-role="divider">
               Frequently Asked Questions
            </li>

            <li>
               <div data-role="collapsible">
<h5>
My First Q
</h5>

<p>
<div style="white-space:normal;">
Some text.
</div>
</p>

               </div>
            </li>


         
         
   </div>
   
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: FAQ Page -->


      <div data-theme="a" id="pageResources" data-role="page"><section>

         <script> writeHeader("backhelp", "home"); </script>
         
         <div data-role="content">
            <div class="content-primary" id="Resource">
               <ul data-role="listview"  id="ResourceList" data-icon="arrow-r" data-inset="true" >
                  <li data-role="divider">
                     <h4>Resources </h4>                    
                  </li>

                     <li>
                        <a href="images/OpenShift3Architecture.png" data-ajax="false">
                           OpenShift Architecture Graphic
                        </a>
                     </li> 
                     
                     <li>
                        <a href=" https://www.youtube.com/watch?v=D_Lj0rObunI" data-ajax="false">
                           You Tube
                        </a>
                     </li> 
                                      
                     <li>
                        <a href="https://access.redhat.com/documentation/en-US/OpenShift_Enterprise/" data-ajax="false">
                           OpenShift Documentation
                        </a>
                     </li> 

                     <li>
                        <a href="https://access.redhat.com/article-type/reference-architecture" data-ajax="false">
                           Reference Architectures
                        </a>
                     </li> 
                                          
                     <li>
                        <a href="http://www.openshift.org/" data-ajax="false">
                           OpenShift Origin
                        </a>
                     </li> 

                     <li>
                        <a href="http://commons.openshift.org/" data-ajax="false">
                           OpenShift Commons
                        </a>
                     </li> 
                                       
                     <li>
                        <a href="https://enterprise.openshift.com/features/" data-ajax="false">
                          OpenShift Features
                        </a>
                     </li>

                     <li>
                        <a href="https://www.openshift.com/promotions/kubernetes.html" data-ajax="false">
                           Kubernetes eBook
                        </a>
                     </li> 
                     
                     <li>
                        <a href="https://www.openshift.com/promotions/docker-security.html" data-ajax="false">
                           Docker Security eBook
                        </a>
                     </li>                               

                     <li>
						   <a href="docs/ContainerColoringBook.pdf" download="ContainerColoringBook" data-ajax="false" >
                           Container Coloring Book
                        </a>
                     </li> 

                     <li>
						   <a href="docs/SELinuxColoringBook.pdf" download="SELinuxColoringBook" data-ajax="false" >
                           SELinux Coloring Book
                        </a>
                     </li> 
                                        
                     <li>
                        <a href="https://github.com/openshift/origin" data-ajax="false">
                           Origin GitHub
                        </a>
                     </li>
                     
                     <li>
                        <a href="http://docs.jboss.org/drools/release/latestFinal/drools-docs/html_single/" data-ajax="false">
                           Drools Documentation
                        </a>
                     </li>
                  
                     <li>
                        <a href="https://access.redhat.com/documentation/en/red-hat-jboss-brms/" data-ajax="false">
                           JBoss BRMS Documentation
                        </a>
                     </li>                  

                     <li>
                        <a href="http://docs.jboss.org/drools/release/latestFinal/drools-docs/html_single/#d0e21474" data-ajax="false">
                           Decision Server Documentation
                        </a>
                     </li>    

                     <li>
                        <a href="https://www.redhat.com/en/services/training" data-ajax="false">
                           Red Hat Training
                        </a>
                     </li>    
                                       
               </ul>
            </div>
         </div>

         <script> writeFooter(); </script>

      </section></div>
      <!-- End: Resource Page -->

 <!-- Begin: Youtube Page -->
<div data-theme="a" id="pageYoutube" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>

         <div data-role="content" align="center">
      <iframe width="300" height="200" src="https://www.youtube.com/watch?v=D_Lj0rObunI" frameborder="0" allowfullscreen></iframe>
         </div>
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Bruce Page -->     
     
           
 <!-- Begin: Bruce Page -->
<div data-theme="a" id="pageBruce" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>

         <div data-role="content">
      <iframe width="300" height="200" src="https://www.youtube.com/watch?v=D_Lj0rObunI" frameborder="0" allowfullscreen></iframe>
         </div>
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Bruce Page -->     
     
      
 </body>
 
  
</html>

          