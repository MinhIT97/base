# Stage 1: Build PHP
FROM php:8.0-fpm AS php

# Install dependencies
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli pdo pdo_mysql zip

# Set working directory
WORKDIR /var/www
# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Copy application files
COPY . /var/www

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Cài đặt các phụ thuộc PHP
RUN composer install

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

# Stage 2: Nginx
FROM nginx:latest AS nginx

# Copy Nginx configuration
COPY nginx.conf /etc/nginx/nginx.conf
COPY conf.d /etc/nginx/conf.d

# Copy application files
COPY --from=php /var/www /var/www

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
