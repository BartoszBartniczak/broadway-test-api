FROM php:7.1-fpm

RUN apt-get update && buildDeps="libpq-dev libzip-dev" && apt-get install -y $buildDeps git nano wget --no-install-recommends
RUN docker-php-ext-install pdo pdo_pgsql pgsql zip bcmath
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN wget https://getcomposer.org/composer.phar && mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer

WORKDIR /app

