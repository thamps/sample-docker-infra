FROM centos:latest
Maintainer ajith@evamiatic

RUN yum update -y
RUN yum install -y httpd net tools php

RUN echo "Testing if i am Alive!"> /var/www/html/index.html

ENTRYPOINT apachectl "-DFOREGROUND"
