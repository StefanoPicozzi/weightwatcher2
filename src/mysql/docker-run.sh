docker run -it \
  -p 3306:3306 \
  -v /home/stefanopicozzi/data/mysql:/var/lib/mysql \
  --env MYSQL_ROOT_PASSWORD=password \
  --env MYSQL_USER=sa \
  --env MYSQL_PASSWORD=password \
  --env MYSQL_DATABASE=nudgedb \
  mysql:latest;
