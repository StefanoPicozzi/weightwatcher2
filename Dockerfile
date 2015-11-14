FROM jboss/kie-server-showcase

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
RUN rm -r /opt/jboss/wildfly/standalone/deployments/kie-server.war
COPY wildfly /opt/jboss/wildfly
COPY m2 /opt/jboss/.m2

# Fix permissions on m2 files
RUN chown -R jboss:jboss /opt/jboss/.m2
RUN chmod -R 755 /opt/jboss/.m2

# Fix permissions on support files
RUN chown -R jboss:jboss $DROOLS_HOME
RUN chmod -R 755 /opt/jboss/wildfly/standalone/deployments

# Run as JBoss
USER jboss

# Expose Ports
EXPOSE 9990 9999 9090 8080

ENV M2_HOME /opt/jboss/.m2

# Run DROOLS
CMD ["/opt/jboss/wildfly/bin/standalone.sh", "-c", "standalone-full-kie-server.xml", "-b", "0.0.0.0", "-bmanagement", "0.0.0.0", "-Dorg.jbpm.server.ext.disabled=true"]
