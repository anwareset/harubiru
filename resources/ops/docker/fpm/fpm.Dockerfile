FROM php:7.4-fpm-alpine
WORKDIR /var/www/html
COPY . /var/www/html
COPY resources/ops/docker/fpm/supervisor/ /etc/
RUN apk add zlib-dev libpng-dev libzip-dev supervisor \
    && docker-php-ext-install exif gd zip pdo_mysql bcmath \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && mkdir -p /var/log/supervisor \
    && rm -rf /tmp/* /var/cache/apk/* \
    && chown -R www-data:www-data /var/www/html \
    && chown -R www-data:www-data /var/log/supervisor
USER www-data:www-data
RUN composer install --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist --no-dev \
    && composer dump-autoload -o
EXPOSE 9000
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]