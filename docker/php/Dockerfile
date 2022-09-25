FROM php:8.1-fpm


RUN apt-get update && apt-get install -y \
    git \
    openssl \
	wget \
	gnupg \
	libsqlite3-dev \
	libicu-dev \
	libcurl4-gnutls-dev \
	libpng-dev \
	htop

RUN docker-php-ext-install \
	pdo \
	pdo_mysql \
	mysqli \
	curl \
	gd \
	bcmath

RUN pecl install xdebug-3.1.5; \
    docker-php-ext-enable xdebug; \
    echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    echo "display_startup_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    echo "xdebug.idekey = PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini;