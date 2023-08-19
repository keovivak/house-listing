FROM php:7.2-apache

COPY src/ /var/www/html/

#FROM php:8.2-cli

#WORKDIR /app

#COPY . .

#RUN ls

#CMD [ "php", "./hello.php" ]
