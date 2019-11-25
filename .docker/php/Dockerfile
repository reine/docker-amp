FROM php:7.2-apache

RUN docker-php-source extract \
    && docker-php-ext-install pdo_mysql \
    && docker-php-source delete

COPY ssl.ext /etc/apache2/

RUN mkdir /etc/apache2/ssl \
    && openssl req -x509 -out /etc/apache2/ssl/ssl.crt -keyout /etc/apache2/ssl/ssl.key \
        -newkey rsa:2048 -nodes -sha256 \
        -subj "/C=PH/ST=Metro Manila/L=Marikina City/O=Local Development/CN=app.local" -extensions EXT -config /etc/apache2/ssl.ext

RUN ln -s /etc/apache2/mods-available/ssl.load  /etc/apache2/mods-enabled/ssl.load