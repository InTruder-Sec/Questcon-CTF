FROM php:7.4-apache

COPY index.php /var/www/html/
COPY styles.css /var/www/html/
COPY background.gif /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Expose the port the application runs on
EXPOSE 80

# Command to run your application
CMD ["apache2-foreground"]
