docker rm -f mysql
docker run -t -i -p 3306:3306 \
  -e MYSQL_USER_NAME=sa \
  -e MYSQL_USER_PASS=password \
  -e MYSQL_USER_DB=nudgedb \
  -v /Users/stefanopicozzi/data/mysql:/var/lib/mysql \
  --name mysql \
  dgraziotin/mysql


#  -v ${PWD}/mysql:/var/lib/mysql \
