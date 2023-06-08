# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Install additional dependencies if needed
# For example, if you need to install additional PHP extensions
# you can use the following commands:
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your PHP application files to the container
# COPY ./src/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 for Apache
EXPOSE 80

# Start Apache when the container launches
CMD ["apache2-foreground"]
