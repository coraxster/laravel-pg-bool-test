FROM php:7


RUN apt update && apt install -y libpq-dev && docker-php-ext-install pdo_pgsql

WORKDIR /app