
curl -i -H "Content-Type: application/xml" -H "X-KIE-ContentType: XSTREAM" -d @"post-facts.xml" -u "erics:jbossbrms1!" -X POST "http://weightwatcher.cloudapps.example.com/kie-server/services/rest/server/containers/instances/watch"
