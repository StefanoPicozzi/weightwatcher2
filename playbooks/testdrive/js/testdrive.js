



function writeFooter() {
   
   username = "Anonymous";

   document.write('<footer style=\"background:url(\'images/strip.png\'); no-repeat;\" data-role=\"footer\" data-position=\"fixed\">');
   document.write('<p class=verysmallparagraph style=\"vertical-align:middle;horizontal-align:middle;text-align:center\">');
   document.write('&nbsp <a href=\"http://www.redhat.com/en/technologies/platform-as-a-service"> <img style=\"width:70px;height:20px;left:5px;\" alt=\"RedHat\" src=\"images/redhat.png\"> </a>');
   document.write('  &nbsp  Contact: <a href=\"mailto:StefanoPicozzi.gmail.com\">spicozzi@redhat.com</a>');        
   document.write(' &nbsp <img style=\"width:70px;height:20px;right:5px;\" alt=\"AWS\" src=\"images/RH_OpenShift_Logo_RGB_White.png\"> </p>');
   document.write('</footer>');
}

function writeHeader (left, right) {

   var leftlink = "settings.php";
   var lefticon = "gear";
   var rightlink = "index.php";
   var righticon = "home";
   
   if (left == "home")         { leftlink = "index.php";                     lefticon = "home";  }
   if (left == "info")         { leftlink = "help.php";                      lefticon = "info";  }
   if (left == "backhome")     { leftlink = "index.php";                     lefticon = "back";  }
   if (left == "backusecases") { leftlink = "usecases.php";                lefticon = "back";  }
   if (left == "backsettings") { leftlink = "settings.php";                  lefticon = "back";  }
   if (left == "backhelp")     { leftlink = "help.php";   lefticon = "back";  }   

   if (right == "home")        { rightlink = "index.php";                    righticon = "home"; }   
   if (right == "info")        { rightlink = "help.php";                     righticon = "info";  }
   if (right == "settings")    { rightlink = "settings.php";                 righticon = "gear"; }
   if (right == "msgs")        { rightlink = "msg.php";                      righticon = "grid"; }         
   if (right == "accountinfo") { rightlink = "help.php#pageAccount";         righticon = "info"; }       

   document.write('<header style=\"background:url(\'images/strip.png\'); height:45px; no-repeat;\" data-role=\"header\" data-position=\"inline\">');
   document.write('  <a data-ajax=\"false\" href=\"' + leftlink + '\" data-ajax="false" data-role="button" data-icon=\"' + lefticon + '\" data-iconpos=\"notext\">Help</a>');
   document.write('  <p class=titleparagraph style=\"text-align:center; vertical-align:middle; font-weight:bold; font-style:normal;\">');
   document.write('  &nbsp <img style=\"margin-left:-105px;float:center;vertical-align:middle;width:210px; height:29px;\" alt=\"OpenShift\" src=\"images/OpenShiftTestDrive-3.png\"> ');   
   document.write(' &nbsp </p> ');
   document.write('  <a id=\"' + right + '\" data-ajax=\"false\" href=\"' + rightlink + '\" data-transition=\"flip\" data-role=\"button\" data-icon=\"' + righticon + '\" data-iconpos=\"notext\" data-ajax=\"false\" class=\"ui-btn-right\">Settings</a>');
   document.write('</header>');

   document.write(' <var class=verysmallparagraph style=\"text-align:left;font-size:11px;font-style:bold;margin-left:10px;color:lightgrey;"> ');
   document.write(' <img style=\"position:relative; top:5px; right:2px; height:18px;\" alt=\"ANZ\" src=\"images/anz-outline-white.png\"> OpenShift Enterprise by Red Hat Test Drive');   
   document.write(' </var> ');   

}




