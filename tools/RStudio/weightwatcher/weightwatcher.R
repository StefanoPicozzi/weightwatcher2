
# Test client for the weightwatcher server based application.
# Installation for weightwatcher are located at:
# http://blog.emergile.com/2015/05/09/weightwatcher/
#
# Author: Stefano Picozzi
# Date: November, 2015
# Email: spicozzi@emergitect.com

Sys.setenv(NOAWT = "true")
library('httr')
library('rjson')
library('RCurl')
library('XML')

url <- "http://weightwatcher2.cloudapps.example.com"

url <- paste(url, "/kie-server/services/rest/server/containers/instances/watch", sep = "")
print(url)

# setwd("/home/guest/weightwatcher")

# Participants

factbody <- ''
factid <- 0
fileName <- 'fact.xml';
fact <- readChar( fileName, file.info(fileName)$size )
factname <- "Participant"
factid <- factid+1
factjson <- '{ "userid" : 1, "username" : "bfskinner@behaviorist.org" }'
fact <- gsub("$(factid)", factid, fact, fixed=TRUE)
fact <- gsub("$(factname)", factname, fact, fixed=TRUE)
fact <- gsub("$(factjson)", factjson, fact, fixed=TRUE)
factbody <- paste(factbody, fact, sep=" ")

# Goals

factid <- 0
fileName <- 'fact.xml';
fact <- readChar( fileName, file.info(fileName)$size )
factname <- "Goal"
factid <- factid+1
factjson <- '{ "userid" : 1, "goalname" : "weight", target : 75, start : 84, low : 70, high : 78 }'
fact <- gsub("$(factid)", factid, fact, fixed=TRUE)
fact <- gsub("$(factname)", factname, fact, fixed=TRUE)
fact <- gsub("$(factjson)", factjson, fact, fixed=TRUE)
factbody <- paste(factbody, fact, sep=" ")

# Observations

factid <- 0
fileName <- 'fact.xml';
fact <- readChar( fileName, file.info(fileName)$size )
factname <- "Observation"
factid <- factid+1
factjson <- '{ "userid" : 1, "obsdate" : "2015-07-20 07:15:00 EST", "obsname" : "weight", "obsvalue" : 80 }'
fact <- gsub("$(factid)", factid, fact, fixed=TRUE)
fact <- gsub("$(factname)", factname, fact, fixed=TRUE)
fact <- gsub("$(factjson)", factjson, fact, fixed=TRUE)
factbody <- paste(factbody, fact, sep=" ")

fileName <- 'fact.xml';
fact <- readChar( fileName, file.info(fileName)$size )
factname <- "Observation"
factid <- factid+1
factjson <- '{ "userid" : 1, "obsdate" : "2015-07-21 08:15:00 EST", "obsname" : "weight", "obsvalue" : 79 }'
fact <- gsub("$(factid)", factid, fact, fixed=TRUE)
fact <- gsub("$(factname)", factname, fact, fixed=TRUE)
fact <- gsub("$(factjson)", factjson, fact, fixed=TRUE)
factbody <- paste(factbody, fact, sep=" ")

fileName <- 'fact.xml';
fact <- readChar( fileName, file.info(fileName)$size )
factname <- "Observation"
factid <- factid+1
factjson <- '{ "userid" : 1, "obsdate" : "2015-07-22 09:15:00 EST", "obsname" : "weight", "obsvalue" : 78 }'
fact <- gsub("$(factid)", factid, fact, fixed=TRUE)
fact <- gsub("$(factname)", factname, fact, fixed=TRUE)
fact <- gsub("$(factjson)", factjson, fact, fixed=TRUE)
factbody <- paste(factbody, fact, sep=" ")

fileName <- 'fact.xml';
fact <- readChar( fileName, file.info(fileName)$size )
factname <- "Observation"
factid <- factid+1
factjson <- '{ "userid" : 1, "obsdate" : "2015-07-23 09:15:00 EST", "obsname" : "weight", "obsvalue" : 76 }'
fact <- gsub("$(factid)", factid, fact, fixed=TRUE)
fact <- gsub("$(factname)", factname, fact, fixed=TRUE)
fact <- gsub("$(factjson)", factjson, fact, fixed=TRUE)
factbody <- paste(factbody, fact, sep=" ")

# Envelope

fileName <- 'fact-envelope.xml';
envelope <- readChar( fileName, file.info(fileName)$size )
request <- gsub("$(factbody)", factbody, envelope, fixed=TRUE)

header=c(Connection="close", 'Content-Type'="application/xml; charset=utf-8", 'Content-length'=nchar(request))

response <- tryCatch({
  POST(url, body=request, content_type_xml(), header=header, add_headers('X-KIE-ContentType'="XSTREAM"), verbose(), authenticate("erics", "jbossbrms1!", type="basic"))
}, warning = function(w) {
  print("Warning POST")
  stop()
}, error = function(e) {
  print(geterrmessage())
  print("Error POST")
  stop()
}, finally = {
})

# Tidy up response payload
response <- saveXML( content(response, type="application/xml") )
response <- gsub("&lt;", "<", response, fixed=TRUE)
response <- gsub("&gt;", ">", response, fixed=TRUE)
response <- gsub("&amp;quot;", '"', response, fixed=TRUE)
write( response, "output.xml" )

list <- xmlToList(xmlTreeParse(response))
for ( i in 2:(length(list$result)-2) ) {
  msg <- as.character( list$result[[i]]$com.redhat.weightwatcher.Fact$facttxt )
  print( msg )
}
