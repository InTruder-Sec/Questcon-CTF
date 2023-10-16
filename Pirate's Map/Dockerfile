# Use an existing image as a base
FROM php:7.4-apache

# Copy your files into the container
COPY index.php /var/www/html/
COPY maps.php /var/www/html/
COPY styles.css /var/www/html/
COPY maps.css /var/www/html/
COPY assets/background.jpg /var/www/html/assets/
COPY assets/map1.png /var/www/html/assets/
COPY assets/map2.png /var/www/html/assets/
COPY assets/map3.png /var/www/html/assets/

# Set the working directory
WORKDIR /var/www/html

# Expose the port the application runs on
EXPOSE 80

# Command to run your application
CMD ["apache2-foreground"]
