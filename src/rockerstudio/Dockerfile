## Start with the official rocker image providing 'base R'
FROM r-base:latest
## This handle reaches Carl and Dirk
MAINTAINER "Carl Boettiger and Dirk Eddelbuettel" rocker-maintainers@eddelbuettel.com

## Add RStudio binaries to PATH
ENV PATH /usr/lib/rstudio-server/bin/:$PATH

## Download and install RStudio server & dependencies
## Attempts to get detect latest version, otherwise falls back to version given in $VER
## Symlink pandoc, pandoc-citeproc so they are available system-wide
RUN rm -rf /var/lib/apt/lists/ \
  && apt-get update \
  && apt-get install -y -t unstable --no-install-recommends \
    ca-certificates \
    file \
    git \
    libapparmor1 \
    libedit2 \
    libcurl4-openssl-dev \
    libssl1.0.0 \
    libssl-dev \
    psmisc \
    python-setuptools \
    supervisor \
    sudo \
  && VER=$(wget --no-check-certificate -qO- https://s3.amazonaws.com/rstudio-server/current.ver) \
  && wget -q http://download2.rstudio.org/rstudio-server-${VER}-amd64.deb \
  && dpkg -i rstudio-server-${VER}-amd64.deb \
  && rm rstudio-server-*-amd64.deb \
  && ln -s /usr/lib/rstudio-server/bin/pandoc/pandoc /usr/local/bin \
  && ln -s /usr/lib/rstudio-server/bin/pandoc/pandoc-citeproc /usr/local/bin \
  && wget https://github.com/jgm/pandoc-templates/archive/1.15.0.6.tar.gz \
  && mkdir -p /opt/pandoc/templates && tar zxf 1.15.0.6.tar.gz \
  && cp -r pandoc-templates*/* /opt/pandoc/templates && rm -rf pandoc-templates* \
  && mkdir /root/.pandoc && ln -s /opt/pandoc/templates /root/.pandoc/templates \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/

## Ensure that if both httr and httpuv are installed downstream, oauth 2.0 flows still work correctly.
RUN echo '\n\
\n# Configure httr to perform out-of-band authentication if HTTR_LOCALHOST \
\n# is not set since a redirect to localhost may not work depending upon \
\n# where this Docker container is running. \
\nif(is.na(Sys.getenv("HTTR_LOCALHOST", unset=NA))) { \
\n  options(httr_oob_default = TRUE) \
\n}' >> /etc/R/Rprofile.site

## A default user system configuration. For historical reasons,
## we want user to be 'rstudio', but it is 'docker' in r-base
RUN usermod -l rstudio docker \
  && usermod -m -d /home/rstudio rstudio \
  && groupmod -n rstudio docker \
  && echo '"\e[5~": history-search-backward' >> /etc/inputrc \
  && echo '"\e[6~": history-search-backward' >> /etc/inputrc \
  && echo "rstudio:rstudio" | chpasswd


RUN mkdir packages

RUN cd packages; wget http://cran.rstudio.com/src/contrib/stringi_1.0-1.tar.gz
RUN cd packages; R CMD INSTALL stringi_1.0-1.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/magrittr_1.5.tar.gz
RUN cd packages; R CMD INSTALL magrittr_1.5.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/colorspace_1.2-6.tar.gz
RUN cd packages; R CMD INSTALL colorspace_1.2-6.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/Rcpp_0.12.3.tar.gz
RUN cd packages; R CMD INSTALL Rcpp_0.12.3.tar.gz
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
RUN cd packages; wget http://cran.rstudio.com/src/contrib/digest_0.6.9.tar.gz
RUN cd packages; R CMD INSTALL digest_0.6.9.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/gtable_0.1.2.tar.gz
RUN cd packages; R CMD INSTALL gtable_0.1.2.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/reshape2_1.4.1.tar.gz
RUN cd packages; R CMD INSTALL reshape2_1.4.1.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/scales_0.3.0.tar.gz
RUN cd packages; R CMD INSTALL scales_0.3.0.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/proto_0.3-10.tar.gz
RUN cd packages; R CMD INSTALL proto_0.3-10.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/ggplot2_2.0.0.tar.gz
RUN cd packages; R CMD INSTALL ggplot2_2.0.0.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/png_0.1-7.tar.gz
RUN cd packages; R CMD INSTALL png_0.1-7.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/rjson_0.2.15.tar.gz
RUN cd packages; R CMD INSTALL rjson_0.2.15.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/jsonlite_0.9.19.tar.gz
RUN cd packages; R CMD INSTALL jsonlite_0.9.19.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/mime_0.4.tar.gz
RUN cd packages; R CMD INSTALL mime_0.4.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/curl_0.9.5.tar.gz
RUN cd packages; R CMD INSTALL curl_0.9.5.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/R6_2.1.2.tar.gz
RUN cd packages; R CMD INSTALL R6_2.1.2.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/bitops_1.0-6.tar.gz
RUN cd packages; R CMD INSTALL bitops_1.0-6.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/RCurl_1.95-4.7.tar.gz
RUN cd packages; R CMD INSTALL RCurl_1.95-4.7.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/base64enc_0.1-3.tar.gz
RUN cd packages; R CMD INSTALL base64enc_0.1-3.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/openssl_0.9.1.tar.gz
RUN cd packages; R CMD INSTALL openssl_0.9.1.tar.gz
RUN cd packages; wget http://cran.rstudio.com/src/contrib/httr_1.1.0.tar.gz
RUN cd packages; R CMD INSTALL httr_1.1.0.tar.gz

#RUN cd packages; wget http://cran.rstudio.com/src/contrib/xlsxjars_0.6.1.tar.gz
#RUN cd packages; R CMD INSTALL xlsxjars_0.6.1.tar.gz

#RUN cd packages; wget http://cran.rstudio.com/src/contrib/rgl_0.95.1441.tar.gz
#RUN cd packages; R CMD INSTALL rgl_0.95.1441.tar.gz

#RUN cd packages; wget http://cran.rstudio.com/src/contrib/xlsx_0.5.7.tar.gz
#RUN cd packages; R CMD INSTALL xlsx_0.5.7.tar.gz

#RUN cd packages; wget http://cran.rstudio.com/src/contrib/XML_3.98-1.3.tar.gz
#RUN cd packages; R CMD INSTALL XML_3.98-1.3.tar.gz

## User config and supervisord for persistant RStudio session
COPY userconf.sh /usr/bin/userconf.sh
COPY add-students.sh /usr/local/bin/add-students
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
RUN mkdir -p /var/log/supervisor \
  && chgrp staff /var/log/supervisor \
  && chmod g+w /var/log/supervisor \
  && chgrp staff /etc/supervisor/conf.d/supervisord.conf
EXPOSE 8787

COPY weightwatcher /home/rstudio

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
