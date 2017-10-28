FROM centos:latest
Maintainer ajith@evamiatic

RUN yum update -y
RUN yum install -y httpd net tools php php-mysql

RUN echo "extension=mysqli.so" > /etc/php.d/mysql.ini
RUN echo "Testing if i am Alive now!!"> /var/www/html/index.html

COPY ./index.php /var/www/html/index.php

ENTRYPOINT apachectl "-DFOREGROUND"
