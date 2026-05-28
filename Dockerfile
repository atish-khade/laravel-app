# --- Stage 1: Build Dependencies ---
FROM composer:2.7 AS builder
WORKDIR /var/www
COPY . .
RUN composer install --no-dev --optimize-autoloader --no-interaction

# --- Stage 2: Production Runtime ---
FROM php:8.3-fpm-alpine
WORKDIR /var/www

# Install production system extensions for Laravel & MySQL connectivity
RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql bcmath opcache

# Copy built codebase from the installer stage
COPY --from=builder /var/www /var/www

# Enforce strict production permissions for PHP-FPM
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
