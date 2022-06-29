FROM php:7.4

RUN apt-get update -y && apt-get install git unzip -y

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
