# Use the official PHP image with PHP 8.1
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev # Install PostgreSQL development files


# Set the working directory
WORKDIR /var/www/html

# Copy your Laravel application files into the container
COPY . .

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install

# Expose port 9000 for PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
