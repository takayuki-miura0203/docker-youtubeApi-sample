FROM php:7.3.4-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    vim

WORKDIR /app

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
