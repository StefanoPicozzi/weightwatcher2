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
 
<!-- Begin: Help page -->
<div data-theme="a" id="pageHelp" data-role="page" data-fullscreen="false" ><section>
   
   <script> writeHeader("backhome", "info")</script>

   <div data-role="content">
      <div class="content-primary" id="Settings">
         <ul data-role="listview"  id="SettingsList" data-icon="arrow-r" data-inset="true" >
            <li data-role="divider"> <h4>Getting Started</h4> </li>
            <li> <a href="#pageStart" >Read Me First</a> </li>
            <li> <a href="env.php" data-ajax="false">Env Variables</a> </li>
            <li> <a href="#pageDev" >Developer Tour</a> </li>
            <li> <a href="#pageOps">Operator Tour</a> </li>
         </ul>
      </div>
   </div>
   
   <script> writeFooter(); </script>

</section></div>
<!-- End: Help section -->

<!-- Begin: Dev Page -->
<div data-theme="a" id="pageDev" data-role="page"><section>

   <script>writeHeader("backusecases", "home")</script>

   <div class="content" data-role="content">
      <h3 style="color:orange">Developer Tour</h3>
 
<div style="color:white;" align="justify"> 

<p>
This page takes you through a tour of some OpenShift features of interest to a Developer.
This tour uses OpenShift's command line interface (CLI) known as rhc.
The rhc tools are built and packaged using the Ruby programming language and
integrate with the Git version control system to provide powerful, 
decentralized version control for your application source code.   
</p>

<p>
Note that in addition to the CLI, OpenShift provides users with multiple ways to create and manage applications 
including IDE integration, REST APIs and a web-based management console.
These interaction methods can be pursued at your leisure at the end of this tour.
</p>

<p>
The rest of this page lists out some developement features to explore together with a short description. 
Check the <a href="help.php#pageGlossary" data-ajax="false">glossary</a> if some terms are unfamiliar.
Substitute the values below whenever a Environment Variable is mentioned.
The instructions assume a POSIX interface.
</p>

<strong>Environment Variables</strong>
<p>
The instructions below refer to environment variables described <a href="env.php" data-ajax="false">here</a>.
</p>

<h4>DNS Resolution</h4>
<p>
First launch a terminal window on your local workstation.
We need to ensure that $BROKER location is resolvable in order for 
the rhc and web based to function correctly.
</p>

<pre>
# From your local workstation
$ cat /etc/resolv.conf

# Check or edit to ensure the first entry is $BROKER
# sudo vi /etc/resolve.conf
nameserver $BROKER
# For Mac OS/x do the above using Preferences > Network
# Save your prior settings first!

# Check that $BROKER is resolvable
$ ping $BROKER

# Verify Developer Console access used later in the tour
# Point your favourite $browser to $BROKER
$ browser http://broker.openshift.example.com
# Authenticate using credentials $DEVUSER and $DEVPASSWORD
</pre>

<h4>Create User</h4>
<p>
Now create yourself a Developer user on your private PaaS.
Note the credentials as these will be needed to configure the rhc tools and later to access the Developer Console.
These are then referenced as $DEVUSER and $DEVPASSWORD in the tour.
</p>

<pre>
# Login to the $BROKER
$ ssh $AMIUSER@$BROKER 
$ sudo oo-admin-ctl-user --login bruce
# If bruce already exists you may skip this section

# From the $BROKER
# Create a Developer user known to OpenShift
$ sudo oo-admin-ctl-user --create --login bruce
$ sudo htpasswd /etc/openshift/htpasswd bruce
# Set password as "bruce"
$ sudo oo-admin-ctl-user --login bruce
</pre>

<h4>rhc Tools</h4>
<p>
The next step is to install the rhc OpenShift client tools into your local workstation.
The rhc dependencies are git and ruby.
The installation process for the various operating systems are described 
<a href="https://developers.openshift.com/en/managing-client-tools.html" data-ajax="false">here</a>.
Visit that link and follow the instructions taking note that 
this documented setup assumes you are pointing to the OpenShift Online.
To point to your private test drive PaaS ensure you point to the $BROKER rather than www.openshift.com.
</p>

<pre>
# From your local workstation
# Check that you have git installed
$ git --version
# If not install git, for Mac OS/X refer http://code.google.com/p/git-osx-installer/


# Check that you have ruby installed
$ ruby -e 'puts "Welcome to Ruby"'
# If not install ruby, if not refer http://www.ruby-lang.org/en/downloads/

# Check that you have the rhc 
$ rhc --version
# if rhc tools are not installed
$ sudo gem install rhc
$ sudo gem update
$ rhc --version

# With git, ruby amd rhc installed we can now setup your workstation
$ rhc setup --server $BROKER --clean
# When prompted use $DEVUSER and $DEVPASSWORD as your OpenShift credentials
# Accept default responses to all other prompts

# Check the settings
$ tail -f ~/.openshift/express.conf

# Verify your workstation environment is correctly configured.
$ rhc domain show
</pre>

<h4>Domains</h4>
<p>
OpenShift allows a user to create multiple domains that are associated with their account. 
Keep in mind that the domain in this context does not refer to the domain name of the application, 
but rather to a unique identifier for grouping your applications
Let us now create a domain for the $DEVUSER which we, of course, shall name "bruce".
</p>

<pre>
# Show list of domains
$ rhc domain list

# Create a domain called bruce
$ rhc domain create bruce

# Show all gears within your domains
$ rhc domain show
</pre>

<h4>My First Application</h4>

<p>
To create an application, we will be using the rhc app command. 
</p>

<pre>
# To view all of the rhc app switches
$ rhc app --help

# First let’s discover available cartridges
$ rhc cartridge list

# Create a simple php application called myfirstphp
$ cd ~
$ rhc app-create myfirstphp -t php-5.3

# How much disk quota is my application using
$ rhc app show myfirstphp --gears quota

# Verify application is responding
$ curl http://myfirstphp-bruce.openshift.example.com
</pre>

<h4>Changing the Application</h4>

<pre>
# Make a change to the application and commit and push
$ cd ~
$ cd myfirstphp
# Make a simple change to the HTML text
$ vi index.php
/Welcome to your PHP application on OpenShift
:s/your\sPHP/my PHP/

# Then push the changes back to the repository
$ git add .
$ git commit -am "My first change"
$ git push

# Verify application has changed
# Remember to replace the Environment Variable
$ curl http://myfirstphp-bruce.$BROKER | grep "my PHP"
</pre>

<h4>SSH into an Application</h4>
OpenShift allows remote access to the application gear by using the secure shell protocol (SSH).
SSH is a network protocol for securely getting access to a remote computer that 
uses RSA public key cryptography for both the connection and authentication.  
Using SSH, users have direct access to the command line of your application gear on the remote server.

<pre>
# SSH into your gear
$ cd ~
$ cd myfirstphp
$ rhc ssh
[ ... ]\> env
[ ... ]\> ls
[ ... ]\> cd app-root
[ ... ]\> cd logs
[ ... ]\> ls
[ ... ]\> exit
</pre>

<h4> Tailing the Log</h4>

<p> Tailing and inspecting your application's log file is easy.
</p>

<pre>
# Tail the log file
$ rhc tail myfirstphp
</pre>

<h4>Stop and Start</h4>
Applications can be stopped and started from the command line

<pre>
# First check the status
$ rhc app show myfirstphp
$ rhc app restart myfirstphp

# Now try a stop and start
$ rhc app stop myfirstphp
$ rhc app start myfirstphp
</pre>


<h4>Deployment History and Rollbacks</h4>
OpenShift supports deployment history complete with the ability to rollback to a previous version of your application. 

<pre>
# Set the number of deployments to keep
$ cd ~
$ cd myfirstapp
$ rhc app-configure --keep-deployments 10
$ rhc deployment-list

# Now git push some changes to your application as you did before
# Refer to "Changing the Application" above
$ rhc deployment-list
# Note deployment id value $ID prior to change

# Now revert back to prior $ID image 
$ rhc deployment-activate $ID
</pre>

<h4>Scaling an Application</h4>
Application scaling enables your application to react to changes in HTTP traffic and 
automatically allocate the necessary resources to handle the current demand. 
The OpenShift infrastructure monitors incoming web traffic and automatically adds additional gears 
to satisfy the demand your application is receiving.

<pre>
# Create a scalable php application called mysecondphp
$ cd ~
$ rhc app-create mysecondphp -t php-5.3 --scaling
# Change scaling defaults so that minimum is 2 and maximum clones is 4
$ rhc cartridge scale php-5.3 -a mysecondphp --min 2 --max 4
# Verify the new settings
$ rhc app show mysecondphp
</pre>

<h4>Viewing HAProxy Information</h4>
<p>
When you create a scaled application, it can consume multiple gears: 
one for the high-availability proxy (HAProxy) itself, 
and one or more for your actual application. 
If you add other cartridges like PostgreSQL or MySQL to your application, 
they are installed on their own dedicated gears.  
The HAProxy cartridge sits between your application and the network and routes web traffic to your web cartridges. 
When traffic increases, HAProxy notifies the OpenShift servers that it needs additional capacity. 
There is a web page dedicated to explaining how scaling works on OpenShift which you can explore
by point your favourite $browser as per below.
</p>

<pre>
# Do this from your local workstation
$browser http://mysecondphp-bruce.$BROKER/haproxy-status/
</pre>

<h4>Creating an Application from_code</h4>
<p>
More complex applications can be quickly created from code.   
</p>

<pre>
# Create a wordpress application using a template example
$ rhc app-create wordpress php-5.4 mysql-5.5 --from-code=https://github.com/openshift/wordpress-example
</pre>

<h4>Port Forwarding</h4>
<p>
With OpenShift port forwarding, developers can connect to their remote services while using local client tools 
without having to worry about the details of configuring complicated firewall rules.
We will show this using the wordpress application example we just created. 
</p>

<pre>
# Note the $username and $password for mysql
$ rhc show-app wordpress
$ rhc port-forward wordpress
# Take a note of the mysql Local service $IP address and $Port generated

# Check that the mysql client is installed
$ which mysql
# Otherwise install the mysql package
$ sudo yum install mysql

# From another terminal shell
$ mysql --host $IP --port $Port --user $username --password=$password --database wordpress
mysql> SHOW TABLES;
mysql> quit

# Return to the port fowarding shell and Crtl-C to stop
</pre>

<h4>Cleaning up an Application</h4>
As a user starts developing an application and deploying changes to OpenShift Enterprise, 
the application will start consuming some of the available disk space that is part of their quota. 
This space is consumed by the Git repository, log files, temporary files, and unused application libraries.  
OpenShift provides a disk-space cleanup tool to help users manage the application disk space.

<pre>
# Tidy up your application
$ rhc app tidy myfirstphp
</pre>

<h4>Development Console</h4>

<p>
OpenShift provides users with multiple ways to create and manage applications including via 
command line tools, IDE integration, REST APIs and a web-based management console.  
So far we have focussed on the rhc command line interface. 
To explore the Console, point your favourite $browser as per below
</p>

<pre>
# From your local workstation
$browser http://$BROKER
</pre>

<h4>But Wait, There's More</h4>

<p>
There is a vast source of resources for Developers to further explore OpenShift.
Some are listed <a href="help.php#pageResources" data-ajax="false">here</a>.
You may find the <a href="ebook.php" data-ajax="false">Getting Start eBook</a> helpful too.
This eBook was writtem with the OpenShift Online PaaS in mind, but you can just as easily use your private instance instead.
Ensure that whenever the Online domain is reference you use $BROKER instead.
</p>

<p>
   Code. Deploy. Enjoy!
</p>

</div>

   </div>
   
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Dev Page -->

<!-- Begin: Ops Page -->
<div data-theme="a" id="pageOps" data-role="page"><section>

   <script>writeHeader("backusecases", "home")</script>

   <div class="content" data-role="content">
      <h3 style="color:orange">Operator Tour</h3>
       
<div style="color:white;" align="justify"> 

This page takes you through a tour of some OpenShift features of interest to those in an Operator related role.
Those concerned only with a Developer view can skip this section.

<p>
The following content lists out some features to explore together with a short description. 
Check the <a href="help.php#pageGlossary" data-ajax="false">glossary</a> if some terms are unfamiliar.
Substitute the values below whenever a Environment Variable is mentioned.
</p>

<strong>Environment Variables</strong>
<p>
The instructions below refer to environment variables described <a href="env.php" data-ajax="false">here</a>.
</p>

<h4>SSH Login</h4>
<p>
First launch a terminal window on your local workstation.
The rhc and web based console require that your workstation can resolve
the location of the OpenShift broker $libra_server.
Once authenticated you can explore creating an application using the web console.
</p>

<pre>
$ ssh $AMIUSER@$BROKER
</pre>

<h4>Reachable</h4>
<p>
In this step we will introduce some diagnostics and monitoring tools available to assess the state of your OpenShift installation.  
First verify that the OpenShift components are reachable from the Client instance.</p>

<pre>
# From your local workstation
$ ping $BROKER

# From the $BROKER
$ ping $WORKERB
$ ping $WORKERB
</pre>

<h4>Diagnostics</h4>

<p>
OpenShift Enterprise ships with a general diagnostics utility that can check the health of your installation. 
The utility may take a few minutes to run as it inspects your hosts. 
</p>

<pre>
# From the $BROKER
$ sudo oo-diagnostics --verbose
</pre>

<h4>Broker Management</h4>
<p>
The Broker is a Rails application that manages all application control, user authentication, 
and DNS updates within OpenShift Enterprise PaaS.  
The Broker uses a MongoDB database to keep a record of users and their applications. 
The Broker manages user authentication and DNS changes through the use of provided plugins.
Check broker specific system health as follows.
</p>

<pre>
# From the $BROKER
$ sudo oo-accept-broker -v
</pre>

<h4>Node Management</h4>
<p>
Node servers are the systems that host user applications.
System health diagnostics tools to try include as below.
</p>

<pre>
# From the $WORKERA
$ ssh $AMIUSER@$WORKERA
$ sudo oo-accept-node -v

# From the $WORKERB
$ ssh $AMIUSER@$WORKERB
$ sudo oo-accept-node -v

# From the $BROKER
$ sudo oo-mco ping -v
</pre>

<h4>Usage</h4>
<p>
In order to view usage information for your installation, you can use the oo-stats command.  
There may be little activity at this stage if noone else has been using the system, 
so you may wish to skip and try some of the Developer related exercises to populate the Test Drive with user content.  
Let’s view the current state of our district by entering in the following command.
</p>

<pre>
# From the $BROKER
$ sudo oo-admin-ctl-district
$ sudo oo-stats
</pre>

<h4>Regions and Zones</h4>
<p>
Districts, regions and zones have been preconfigured for you in this Test Drive and can
be inspected as follows.  
</p>

<pre>
# from the $BROKER
$ sudo oo-admin-ctl-region --command list
</pre>

<h4>Cartridges</h4>
<p>
Running the oo-admin-ctl-cartridge command lists all currently imported cartridges and the timestamp of each import. 
Active cartridges are identified with an asterisk.
</p>

<pre>
# From the $BROKER
$ sudo oo-admin-ctl-cartridge --command list

# To deactivate and then activates cartridges
$ sudo oo-admin-ctl-cartridge --command deactivate --name ruby-1.8, mysql-5.1
$ sudo oo-admin-ctl-cartridge --command activate --name ruby-1.8, mysql-5.1
</pre>

<h4>Logging</h4>
<p>
Logs are your little friends. Learn where they live.
</p>

<pre>
# From the $BROKER
$ sudo tail -f /var/log/messages
$ sudo tail -f /var/log/activemq/activemq.log
$ sudo tail -f /var/log/mongodb/mongodb.log
$ sudo tail -f /var/log/httpd/error_log
</pre>

<h4>Create User</h4>
<p>
OpenShift can integrate with external LDAP based authentication systems.  
For this Test Drive we are using a simple authentication mechanism based on a pre-supplied embedded OpenShift user database.
The steps to add another such user would be as per below.
</p>

<pre>
# From the $BROKER
$ sudo oo-admin-ctl-user --login bruce
# If bruce already exists skip this Create User topic

# Create a user known to OpenShift
$ sudo oo-admin-ctl-user --create --login bruce
$ sudo htpasswd /etc/openshift/htpasswd bruce
$ sudo oo-admin-ctl-user --login bruce

# Configure a user to create 25 gears.
$ sudo oo-admin-ctl-user --login bruce --setmaxgears 25
$ sudo oo-admin-ctl-user --login bruce
</pre>

<h4>Stop and Start Services</h4>
The following command can be used to stop and start the OpenShift server components:

<pre>
# From the $BROKER
$ sudo service named status
$ sudo service named restart

$ sudo service mongod status
$ sudo service mongod restart

$ sudo service activemq status
$ sudo service activemq restart

$ sudo service httpd status
$ sudo service httpd restart

$ sudo service openshift-broker status
$ sudo service openshift-broker restart

$ sudo service openshift-console status
$ sudo service openshift-console restart

$ sudo service ruby193-mcollective status
$ sudo service ruby193-mcollective restart
</pre>

<h4>Quickstarts</h4>
Developers can create applications using QuickStarts, which are preconfigured applications installed from a specific source.  
QuickStarts are not available to developers by default in OpenShift Enterprise 
but can be added by editing the quickstarts.json file on the broker host. 
Add entries for one or more QuickStart configurations as follows. 

<pre>
# From the $BROKER
# Add django and wordpress quickstarts
$ sudo vi /etc/openshift/quickstarts.json 
[
{"quickstart": {
"id": "1",
   "name": "Django",
   "website": "https://www.djangoproject.com/",
"initial_git_url": "git://github.com/openshift/django-example.git",
"cartridges": ["python-2.7"],
"summary": "A high-level Python web framework that encourages rapid development and clean, pragmatic design. Administrator user name and password are written to $OPENSHIFT_DATA_DIR/CREDENTIALS.",
"tags": ["python","django","framework"],
"admin_tags": []
}},
{"quickstart": {
"id": "2",
   "name": "Wordpress",
   "website": "https://wordpress.org/",
"initial_git_url": "git://github.com/openshift/wordpress-example.git",
"cartridges": ["php-5.3",”mysql-5.1”],
"summary": "A semantic personal publishing platform.",
"tags": ["php","blog","framework",”instant-app”],
"admin_tags": []
}}
]

# Make the new quickstarts visible on console
$ sudo oo-admin-console-cache --clear

# Verify the quickstart now appears on the Developer Console
# Launch the Console using your favoutite browser
$ $browser $BROKER
# Use $DEVUSER and $DEVPASSWORD
# Go to Add Application section and search for "wordpress"
</pre>

<h4>Removing Applications</h4>
<p>
Administrators can remove a user created application by issuing the following commands.
</p>

<pre>
# From your local workstation
$ rhc domain show
# Choose an app to destroy $appname

# From the $BROKER
$ oo-admin-ctl-app -l $DEVUSER -a $appname -c stop
$ oo-admin-ctl-app -l $DEVUSER -a $appname -c destroy

# From your local workstation
$ rhc domain show
</pre>


<h4>Administration Console</h4>
OpenShift includes an Administration Console that will allow an administrator to gain valuable insights into the usage of the platform.
While read-only in this current release, the the Administration Console provides visibility 
useful for infrastructure capacity planning.
To explore this Console, open your favorite $browser to the URL below.  

<pre>
$browser http://$BROKER/admin-console
</pre>

</div>

   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Ops Page -->
      
<!-- Begin: Start Page -->
<div data-theme="a" id="pageStart" data-role="page"><section>

   <script>writeHeader("backusecases", "home")</script>

   <div class="content" data-role="content">
      <h3 style="color:orange">Read Me First</h3>
      
  
        <div style="color:white;" align="justify"> 
<p>
Welcome to the OpenShift Enterprise by Red Hat Test Drive on Amazon Web Services (AWS).
Test Drives allow users to quickly and easily evaluate a software solution using a private instance provisioned automatically on AWS.
</p>

<p>
Before you can explore OpenShift you need to launch the OpenShift Test Drive on AWS.
This is a free 3-step process described <a href="tryit.php" data-ajax="false"> here</a>. 
Launching is quick, typically the system is fully provisioned within 20 minutes. 
</p>

<p>
Once launched, you can explore OpenShift independently and/or using the suggested <a href="usecases.php#pageDev" data-ajax="false">Developer</a> and 
<a href="usecases.php#pageOps" data-ajax="false">Operator</a> tours and examples provided. 
Each launched instance is identified via a unique string $N.
The value of this is notified via an email.
This value then becomes the basis of the AMI's FQDN as described <a href="env.php" data-ajax="false">here</a>.
</p>

       </div>
      
   </div>      
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Mgmt Page -->      
      
      
 </body>
 
  
</html>

          