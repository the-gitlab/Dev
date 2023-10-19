FROM php:7.0.33-apache

RUN docker-php-ext-install pdo_mysql
RUN echo "deb http://archive.debian.org/debian-security stretch/updates main" > /etc/apt/sources.list
RUN apt-get update
RUN apt install -y libssl-dev libcurl4-openssl-dev
RUN pecl install mongodb-1.6.0 && docker-php-ext-enable mongodb
RUN pecl install xdebug-2.9.0 && docker-php-ext-enable xdebug \
&& echo "xdebug.remote_enable = 1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_autostart = 1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_port = 9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini