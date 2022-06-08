FROM php:8.0.2-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli


COPY index.php /var/www/html
COPY login.php /var/www/html
COPY register.php /var/www/html
COPY home.php /var/www/html
COPY flag.php /var/www/html
COPY .htaccess /var/www/html
COPY db_connect.php /var/www/html
COPY logout.php /var/www/html
COPY style.css /var/www/html

#FROM mysql:5.7

#ENV MYSQL_ALLOW_EMPTY_PASSWORD=true
#ENV MYSQL_USER=mysql
#ENV MYSQL_PASSWORD=password
#ENV MYSQL_DATABASE=db

#COPY commandsql.sql /docker-entrypoint-initdb.d/


