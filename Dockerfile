FROM php:apache
COPY index.php /var/www/html
WORKDIR /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]
