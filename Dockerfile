FROM helixtech/php:7.3.14-apache-0.1.2
RUN a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
COPY . /var/www/html

# Install Composer
RUN composer install

RUN cd /var/www/html
COPY .env.example .env
RUN composer dump-autoload --no-dev --optimize
CMD php -S 0.0.0.0:8084 -t public
EXPOSE 8084
