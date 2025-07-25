FROM php:8.1-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

COPY ./public /var/www/html/public
WORKDIR /var/www/html/public

EXPOSE 80