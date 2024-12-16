FROM php:8.2-apache


COPY . /var/www/html/

RUN a2enmod rewrite

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
