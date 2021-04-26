FROM php:7.1.27-apache
RUN apt-get update && apt-get install nano && apt-get install -y wget && apt-get install -y apt-utils && apt-get install debconf
COPY start.sh /start.sh
RUN chmod 0755 /start.sh
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN pecl install xdebug-2.5.0 && docker-php-ext-enable xdebug
#COPY php.ini /usr/local/etc/php/conf.d/php.ini-production
COPY php.ini /usr/local/etc/php/php.ini
RUN usermod -u 1000 www-data
RUN usermod -G staff www-data
CMD ["bash", "/start.sh"]