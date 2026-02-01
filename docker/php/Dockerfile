FROM php:8.4-fpm-alpine

RUN apk --no-cache add curl git wget bash dpkg

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/ 

RUN chmod +x /usr/local/bin/install-php-extensions \
    && install-php-extensions \
        opcache \
        pdo_mysql \
        mysqli \
        intl \
        zip \
        gd \
        redis \
        amqp

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

WORKDIR /var/www

