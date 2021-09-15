FROM helixtech/php:7.3.14-apache-0.1.2
RUN a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/html
COPY . .
RUN cd /var/www/html
EXPOSE 8086
RUN chmod +x run.sh
RUN chmod -R 777 storage/
RUN composer dump-autoload --no-dev --optimize
copy ./run.sh /tmp    
ENTRYPOINT ["/tmp/run.sh"]