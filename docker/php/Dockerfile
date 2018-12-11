FROM php:7.2-fpm

RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mbstring
RUN apt-get -y install gcc make autoconf libc-dev pkg-config
RUN apt-get -y install libyaml-dev
RUN pecl install yaml
RUN pecl install trader

WORKDIR /var/www/html
COPY ./php.ini /usr/local/etc/php
WORKDIR /var/www/html