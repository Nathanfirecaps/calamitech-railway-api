FROM php:8.2-apache

# Disable all MPMs first (prevents "More than one MPM loaded")
RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork

# Install mysqli for MySQL support
RUN docker-php-ext-install mysqli

# Copy PHP files
COPY . /var/www/html/

# Apache runs on port 80
EXPOSE 80

