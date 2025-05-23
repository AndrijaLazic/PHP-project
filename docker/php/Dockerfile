FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    git \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Xdebug
RUN pecl install xdebug 
    # && docker-php-ext-enable xdebug

# Copy your xdebug.ini (optional)
COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html
