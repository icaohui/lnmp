FROM php:7.1-fpm

MAINTAINER caohui <772071248@qq.com>

RUN docker-php-ext-install mysqli \
 && pecl install redis

COPY config/php.ini /usr/local/etc/php/conf.d/php.ini

EXPOSE 9000
CMD ["php-fpm"]

