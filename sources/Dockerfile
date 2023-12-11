FROM php:7-apache
# Activation des modules php
RUN docker-php-ext-install pdo pdo_mysql
# Configuration
WORKDIR /var/www/html
COPY app/ .
