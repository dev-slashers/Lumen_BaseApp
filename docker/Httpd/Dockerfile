FROM httpd:2.4.46
MAINTAINER Salvatore Turboli (salvatore.turboli@gmail.com)
RUN mkdir -p /usr/local/apache2/conf/sites/
COPY conf/httpd.conf /usr/local/apache2/conf/httpd.conf
COPY conf/lumen.conf /usr/local/apache2/conf/sites/lumen.conf
EXPOSE 80
CMD ["httpd", "-D", "FOREGROUND"]