FROM solr:5.3
MAINTAINER LamanLu

RUN curl -L -o /tmp/mysql-connector-java-5.1.39.tar.gz http://cdn.mysql.com/Downloads/Connector-J/mysql-connector-java-5.1.39.tar.gz
RUN tar -C /tmp --extract --file /tmp/mysql-connector-java-5.1.39.tar.gz
RUN mv /tmp/mysql-connector-java-5.1.39/mysql-connector-java-5.1.39-bin.jar /opt/solr/server/lib/

RUN cp /opt/solr/dist/solr-dataimporthandler-5.3.2.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib \
    && cp /opt/solr/dist/solr-dataimporthandler-extras-5.3.2.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib

RUN curl -L -o /tmp/mmseg4j-solr-2.3.0-with-mmseg4j-core.zip http://106.187.90.123/mmseg4j-solr-2.3.0-with-mmseg4j-core.zip
RUN unzip -n /tmp/mmseg4j-solr-2.3.0-with-mmseg4j-core.zip -d /tmp/mmseg4j-solr-2.3.0
RUN mv /tmp/mmseg4j-solr-2.3.0/mmseg4j-core-1.10.0.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib \
    && mv /tmp/mmseg4j-solr-2.3.0/mmseg4j-solr-2.3.0.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib 

#RUN curl -L -o /tmp/mmseg4j-1.9.1.zip https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/mmseg4j/mmseg4j-1.9.1.zip
#RUN unzip -n /tmp/mmseg4j-1.9.1.zip -d /tmp
#RUN mv /tmp/mmseg4j-1.9.1/dist/mmseg4j-analysis-1.9.1.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib \
#    && mv /tmp/mmseg4j-1.9.1/dist/mmseg4j-core-1.9.1.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib \
#    && mv /tmp/mmseg4j-1.9.1/dist/mmseg4j-solr-1.9.1.jar /opt/solr/server/solr-webapp/webapp/WEB-INF/lib