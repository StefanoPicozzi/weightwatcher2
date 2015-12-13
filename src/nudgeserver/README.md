https://github.com/StefanoPicozzi/tnm

oc get service

oc new-app openshift/wildfly-81-centos7~https://github.com/StefanoPicozzi/nudgeserver --name nudgeserver -l name=nudgeserver -e MYSQL_USER=sa MYSQL_PASSWORD=password MYSQL_DATABASE=nudgedb MYSQL_SERVICE_HOST=172.30.147.21 MYSQL_SERVICE_PORT=3306

oc expose service nudgeserver --name=nudgeserver -l name=nudgeserver --hostname=nudgeserver.cloudapps.example.com
