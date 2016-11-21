FROM java:8
MAINTAINER Laman

VOLUME /tmp
ADD  Blog-0.1.war app.jar
RUN sh -c 'touch /app.jar'
ENTRYPOINT ["sh", "-c", "java -Djava.security.egd=file:/dev/./urandom -jar /app.jar"]
