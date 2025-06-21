FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your project files into the container
COPY . /var/www/html/

# Enable Apache rewrite module (optional)
RUN a2enmod rewrite

# Set permissions (optional, depende sa app mo)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
