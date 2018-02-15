FROM php:7.1-apache

RUN apt-get update -y

RUN docker-php-ext-install mysqli pdo pdo_mysql
