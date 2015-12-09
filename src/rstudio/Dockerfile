# Use centos as the base
FROM centos:latest
MAINTAINER Stefano Picozzi

USER root

RUN yum clean packages
RUN yum clean metadata
RUN yum clean dbcache
RUN yum clean all
RUN yum makecache

RUN yum -y install epel-release
RUN yum -y install R
RUN yum -y install mysql

RUN yum -y install wget
RUN wget http://download2.rstudio.org/rstudio-server-rhel-0.99.442-x86_64.rpm
RUN yum -y install --nogpgcheck rstudio-server-rhel-0.99.442-x86_64.rpm

RUN yum -y install ftp
RUN yum -y install curl
RUN yum -y install libcurl libcurl-devel
RUN yum -y install libpng-devel
RUN yum -y install mesa-libGL-devel mesa-libGLU-devel libpng-devel
RUN yum -y install libxml2 libxml2-devel
RUN yum -y install git

RUN mkdir packages

#RUN cd packages; wget http://cran.rstudio.com/src/contrib/rJava_0.9-6.tar.gz
#RUN cd packages; R CMD INSTALL rJava_0.9-6.tar.gz
RUN cd packages; wget https://cran.r-project.org/src/contrib/rJava_0.9-7.tar.gz
RUN cd packages; R CMD INSTALL rJava_0.9-7.tar.gz

RUN cd packages; git clone https://github.com/StefanoPicozzi/Rdrools6
RUN cd packages; R CMD INSTALL Rdrools6/Rdrools6jars_0.0.1.tar.gz
RUN cd packages; R CMD INSTALL Rdrools6/Rdrools6_0.0.1.tar.gz

# RUN cd packages; wget https://github.com/StefanoPicozzi/Rdrools6/blob/master/Rdrools6jars_0.0.1.tar.gz
# RUN cd packages; R CMD INSTALL Rdrools6jars_0.0.1.tar.gz
# RUN cd packages; wget https://github.com/StefanoPicozzi/Rdrools6/blob/master/Rdrools6_0.0.1.tar.gz
# RUN cd packages; R CMD INSTALL Rdrools6_0.0.1.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/stringi_1.0-1.tar.gz
RUN cd packages; R CMD INSTALL stringi_1.0-1.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/magrittr_1.5.tar.gz
RUN cd packages; R CMD INSTALL magrittr_1.5.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/colorspace_1.2-6.tar.gz
RUN cd packages; R CMD INSTALL colorspace_1.2-6.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/Rcpp_0.12.2.tar.gz
RUN cd packages; R CMD INSTALL Rcpp_0.12.2.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/stringr_1.0.0.tar.gz
RUN cd packages; R CMD INSTALL stringr_1.0.0.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/RColorBrewer_1.1-2.tar.gz
RUN cd packages; R CMD INSTALL RColorBrewer_1.1-2.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/dichromat_2.0-0.tar.gz
RUN cd packages; R CMD INSTALL dichromat_2.0-0.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/munsell_0.4.2.tar.gz
RUN cd packages; R CMD INSTALL munsell_0.4.2.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/labeling_0.3.tar.gz
RUN cd packages; R CMD INSTALL labeling_0.3.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/plyr_1.8.3.tar.gz
RUN cd packages; R CMD INSTALL plyr_1.8.3.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/digest_0.6.8.tar.gz
RUN cd packages; R CMD INSTALL digest_0.6.8.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/gtable_0.1.2.tar.gz
RUN cd packages; R CMD INSTALL gtable_0.1.2.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/reshape2_1.4.1.tar.gz
RUN cd packages; R CMD INSTALL reshape2_1.4.1.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/scales_0.3.0.tar.gz
RUN cd packages; R CMD INSTALL scales_0.3.0.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/proto_0.3-10.tar.gz
RUN cd packages; R CMD INSTALL proto_0.3-10.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/ggplot2_1.0.1.tar.gz
RUN cd packages; R CMD INSTALL ggplot2_1.0.1.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/png_0.1-7.tar.gz
RUN cd packages; R CMD INSTALL png_0.1-7.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/xlsxjars_0.6.1.tar.gz
RUN cd packages; R CMD INSTALL xlsxjars_0.6.1.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/rjson_0.2.15.tar.gz
RUN cd packages; R CMD INSTALL rjson_0.2.15.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/rgl_0.95.1367.tar.gz
RUN cd packages; R CMD INSTALL rgl_0.95.1367.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/xlsx_0.5.7.tar.gz
RUN cd packages; R CMD INSTALL xlsx_0.5.7.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/jsonlite_0.9.17.tar.gz
RUN cd packages; R CMD INSTALL jsonlite_0.9.17.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/mime_0.4.tar.gz
RUN cd packages; R CMD INSTALL mime_0.4.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/curl_0.9.4.tar.gz
RUN cd packages; R CMD INSTALL curl_0.9.4.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/R6_2.1.1.tar.gz
RUN cd packages; R CMD INSTALL R6_2.1.1.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/httr_1.0.0.tar.gz
RUN cd packages; R CMD INSTALL httr_1.0.0.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/bitops_1.0-6.tar.gz
RUN cd packages; R CMD INSTALL bitops_1.0-6.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/RCurl_1.95-4.7.tar.gz
RUN cd packages; R CMD INSTALL RCurl_1.95-4.7.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/XML_3.98-1.3.tar.gz
RUN cd packages; R CMD INSTALL XML_3.98-1.3.tar.gz

RUN cd packages; wget http://cran.rstudio.com/src/contrib/base64enc_0.1-3.tar.gz
RUN cd packages; R CMD INSTALL base64enc_0.1-3.tar.gz

USER root
RUN useradd guest
RUN echo guest:guest | chpasswd

COPY weightwatcher /home/guest

RUN chown -R guest:guest /home/guest/*

EXPOSE 8787
CMD /usr/lib/rstudio-server/bin/rserver --server-daemonize 0
