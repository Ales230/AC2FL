# Use official PHP image from Docker Hub
FROM php:7.4-apache

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy your PHP files into the container
COPY . .

# Expose port 80
EXPOSE 80
