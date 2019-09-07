FROM php:7.2-fpm

MAINTAINER caohui <772071248@qq.com>

RUN apt-get update \
 && apt-get install -y zlib1g-dev libjpeg-dev libpng-dev libmcrypt-dev

RUN pecl install mcrypt-1.0.0 \
 && docker-php-ext-enable mcrypt \
 && docker-php-ext-install mysqli \
 && docker-php-ext-install gd \
 && docker-php-ext-install pdo_mysql \ 
 && docker-php-ext-install bcmath \ 
 && pecl install redis

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY config/redis.ini /usr/local/etc/php/conf.d/redis.ini

COPY config/www.conf /usr/local/etc/php-fpm.d/www.conf

EXPOSE 9000
CMD ["php-fpm"]

