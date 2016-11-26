FROM php:7-fpm
MAINTAINER LamanLu

ENV TZ=Asia/Hong_Kong

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libxml2-dev \
        libcurl4-gnutls-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt mysqli pdo pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && pecl install solr \
    && docker-php-ext-enable solr

#For php 5.X
#RUN curl -L -o /tmp/redis.tar.gz https://github.com/phpredis/phpredis/archive/2.2.7.tar.gz \
#    && tar xfz /tmp/redis.tar.gz \
#    && rm -r /tmp/redis.tar.gz \
#    && mv phpredis-2.2.7 /usr/src/php/ext/redis \
#    && docker-php-ext-install redis

#For PHP 7.X
RUN curl -L -o /tmp/php7.tar.gz https://github.com/phpredis/phpredis/archive/php7.tar.gz \
    && tar -xzf /tmp/php7.tar.gz -C /tmp \
    && cd /tmp/phpredis-php7 \
    && phpize \
    && ./configure \
    && make && make install \
    && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini
