FROM php:8.1-fpm

ARG user
ARG uid

RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev \
	&& pecl install memcached \
	&& docker-php-ext-enable memcached

RUN apt-get install -y libmagickwand-dev \
    && pecl install imagick && docker-php-ext-enable imagick

RUN pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install sockets gd

RUN apt-get -y install git cron iputils-ping nano curl libzip-dev libicu-dev

RUN docker-php-ext-configure intl && docker-php-ext-install intl

RUN docker-php-ext-install mysqli pdo_mysql

RUN docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www/html/app

COPY . .

RUN composer install -vv

USER $user