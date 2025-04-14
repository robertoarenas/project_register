FROM php:8.4-apache

#Instalamos dependencias y driver
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

#Copiar los archivos del proyecto   
COPY . /var/www/html/

#Activar mod_rewrite
RUN a2enmod rewrite

#Dar permisos
RUN chown -R www-data:www-data /var/www/html

#Puerto
EXPOSE 80