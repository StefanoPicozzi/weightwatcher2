https://github.com/StefanoPicozzi/nudgeclient

oc get service

oc new-app openshift/php-55-centos7~https://github.com/StefanoPicozzi/nudgeclient --name=nudgeclient -l name=nudgeclient name=nudgeserver -e MYSQL_USER=sa MYSQL_PASSWORD=password MYSQL_DATABASE=nudgedb MYSQL_SERVICE_HOST=172.30.147.21 MYSQL_SERVICE_PORT=3306

oc expose service nudgeclient --name=nudgeclient --hostname=nudgeclient.cloudapps.example.com
