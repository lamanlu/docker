FROM solr:6.1
MAINTAINER LamanLu

#RUN echo "Asia/Hong_Kong" > /etc/timezone
#RUN dpkg-reconfigure -f noninteractive tzdata

RUN cp /opt/solr/dist/solr-dataimporthandler-6.1.0.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib

RUN curl -L -o /tmp/mysql-connector-java-5.1.39.tar.gz http://cdn.mysql.com/Downloads/Connector-J/mysql-connector-java-5.1.39.tar.gz \
    && tar xfz /tmp/mysql-connector-java-5.1.39.tar.gz \
    && rm -r /tmp/mysql-connector-java-5.1.39.tar.gz \
    && mv /tmp/mysql-connector-java-5.1.39/mysql-connector-java-5.1.39-bin.jar /opt/solr/server/lib \