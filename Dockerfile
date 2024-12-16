# Usar la imagen base de PHP con Apache
FROM php:8.2-apache

# Copiar todo el contenido de tu proyecto al contenedor
COPY . /var/www/html/

# Habilitar el módulo de reescritura de Apache
RUN a2enmod rewrite

# Copiar la configuración personalizada de Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Instalar las extensiones necesarias de PHP (pdo y pdo_mysql)
RUN docker-php-ext-install pdo pdo_mysql

# Exponer el puerto 80 para acceso web
EXPOSE 80
