FROM php:8.3-apache

RUN apt update && apt upgrade -y &&  apt install -y git vim nano curl wget telnet links

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/

RUN git clone https://github.com/lenabct/Info411.git html

WORKDIR /var/www/html

RUN cp connect.php.docker connect.php

EXPOSE 80