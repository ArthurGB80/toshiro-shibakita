FROM php:7.4-fpm
COPY . /var/www/html/
WORKDIR /var/www/html/
RUN docker-php-ext-install mysqli