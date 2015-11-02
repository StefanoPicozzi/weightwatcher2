
curl -i -H "Content-Type: application/xml" -H "X-KIE-ContentType: XSTREAM" -d @"post-facts.xml" -u "erics:jbossbrms1!" -X POST "http://192.168.59.103:8080/kie-server/services/rest/server/containers/instances/watch"
