FROM php:8.3.30RC1-apache-trixie

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite
