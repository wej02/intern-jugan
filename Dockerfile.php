FROM php:7.4-fpm AS php
RUN apt-get update && apt-get install -y && apt-get install vim -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libgmp-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip \
    && docker-php-ext-enable opcache \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install gmp
WORKDIR /var/www
COPY . /var/www
EXPOSE 9000
CMD ["sh", "-c", "php-fpm"]