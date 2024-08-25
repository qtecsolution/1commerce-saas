FROM php:8.1-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Set environment variable to allow superuser
ENV COMPOSER_ALLOW_SUPERUSER=1
# Update package list and install necessary dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip

# Clean up
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip
# Copy project files and install dependencies using Composer
COPY . .

# Copy .env.example to .env
RUN cp .env.example .env

# Copy Composer binary from Composer official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN composer update


# Install Laravel dependencies
RUN composer install

# Generate application key
RUN php artisan key:generate

# Change permissions of the vendor directory
RUN chmod -R 775 /var/www/html/storage
# Run Composer dump-autoload to optimize autoloader
# RUN composer dump-autoload --optimize

# Expose port if necessary
EXPOSE 9000

# Command to run PHP-FPM
# CMD ["php-fpm"]