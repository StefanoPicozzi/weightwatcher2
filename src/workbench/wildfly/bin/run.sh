/opt/jboss/wildfly/bin/standalone.sh -c standalone-full-drools.xml -b 0.0.0.0 \
	-Dorg.jbpm.server.ext.disabled=true \
	-Dorg.guvnor.m2repo.dir=/opt/jboss/.m2 \
	-Dorg.uberfire.nio.git.dir=/opt/jboss/.m2 \
      	-Dorg.kie.demo=false -Dorg.kie.example=false 
