FROM php:7


RUN apt update && apt install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql pdo_mysql

WORKDIR /app