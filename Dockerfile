FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pgsql pdo pdo_pgsql

COPY 000-default.conf /etc/apache2/sites-available/
