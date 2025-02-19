# Use the official PHP image
FROM php:7.4-apache

# Copy the source code to the container
COPY . /var/www/html/

# Install any necessary dependencies
RUN docker-php-ext-install pdo pdo_mysql

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
