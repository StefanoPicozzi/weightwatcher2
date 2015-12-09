FROM jboss/drools-workbench-showcase

# Maintainer details
MAINTAINER Stefano Picozzi <spicozzi@redhat.com>

# Environment Variables
ENV DROOLS_HOME /opt/jboss/wildfly
ENV DROOLS_VERSION_MAJOR 6
ENV DROOLS_VERSION_MINOR 3
ENV DROOLS_VERSION_MICRO 0
ENV DROOLS_VERSION_BUILD FINAL
ENV WILDFLY_VERSION_MAJOR 8
ENV WILDFLY_VERSION_MINOR 1
ENV WILDFLY_VERSION_MICRO 0
ENV WILDFLY_VERSION_BUILD FINAL

# Swtich back to root user to perform cleanup
USER root

# Apply the prebuilt option
RUN rm -r /opt/jboss/wildfly/standalone/deployments/drools-wb.war
COPY wildfly /opt/jboss/wildfly
COPY m2 /opt/jboss/.m2

# Fix permissions on support files
RUN chown -R jboss:jboss $DROOLS_HOME
RUN chmod -R 755 /opt/jboss/wildfly/standalone/deployments

RUN chown -R jboss:jboss /opt/jboss/.m2
RUN chmod -R 755 /opt/jboss/.m2

# Run as JBoss
USER jboss

# Expose Ports
# EXPOSE 9990 9999 9090 8080
EXPOSE 8080

ENV M2_HOME /opt/jboss/.m2

# Run DROOLS
CMD ["/opt/jboss/wildfly/bin/standalone.sh", "-c", "standalone-full-drools.xml", "-b", "0.0.0.0", \
      "-Dorg.jbpm.server.ext.disabled=true", "-Dorg.guvnor.m2repo.dir=/opt/jboss/.m2", "-Dorg.uberfire.nio.git.dir=/opt/jboss/.m2", \
      "-Dorg.kie.demo=false", "-Dorg.kie.example=false" \
      ]

# To access the application, launch a browser and point it to:
# http://192.168.59.103:8080/drools-wb
# Login using Username/Password of admin/admin
