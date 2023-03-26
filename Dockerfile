FROM php:8.0-fpm

RUN apk update && apk add --no-cache \
    build-base \
    shadow \
    openssl-dev \
    icu-dev \
    zlib-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libxml2-dev \
    supervisor \
    curl

RUN docker-php-ext-install opcache pdo_mysql mysqli zip gd exif pcntl intl bcmath soap
RUN pecl install redis xdebug && docker-php-ext-enable redis xdebug

WORKDIR /var/www/html

COPY . .

RUN cp .env.example .env && \
    php artisan key:generate

CMD ["php-fpm"]

EXPOSE 8000
