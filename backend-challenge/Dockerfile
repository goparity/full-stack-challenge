FROM php:8.1-apache

RUN a2enmod rewrite ssl headers
RUN /etc/init.d/apache2 restart

RUN echo "memory_limit=-1" >> /usr/local/etc/php/php.ini

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
  install-php-extensions \
  gd \
  zip \
  bcmath \
  mysqli \
  pdo_mysql \
  soap

COPY . /var/www/html
COPY ./apache/default.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 80/tcp

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer