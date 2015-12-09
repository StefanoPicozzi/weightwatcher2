export M2_HOME=~/.m2
./standalone.sh -b 0.0.0.0 -bmanagement 0.0.0.0 --server-config=standalone-full-kie-server.xml -Dorg.jbpm.server.ext.disabled=true
