FROM php:8.2-apache

# Enable Apache rewrite module for clean URLs (.htaccess)
RUN a2enmod rewrite

# Copy site files to default Apache directory
COPY . /var/www/html/

# Expose web port
EXPOSE 80
