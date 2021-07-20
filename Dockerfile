FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
vim \
git

RUN docker-php-ext-install mysqli

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN echo "extension=mongodb.so" > $PHP_INI_DIR/conf.d/mongodb.ini

COPY src/ /var/www/html

RUN chmod +x /script.sh
ENTRYPOINT ["./script.sh"]

#CMD composer install despues del exec ejecutar esto
