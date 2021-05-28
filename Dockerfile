FROM php:8.0-apache as builder

RUN apt-get update \
    && apt-get install -y --no-install-recommends git zip unzip wget

# Copy local code to the container image.
COPY . /var/www/html/

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV PORT 9090

# Use the PORT environment variable in Apache configuration files.
RUN cp /var/www/html/apache-vhost.conf /etc/apache2/sites-available/000-default.conf
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony/bin/symfony /usr/local/bin/symfony
RUN echo "$(curl -sS https://composer.github.io/installer.sig) -" > composer-setup.php.sig \
    && curl -sS https://getcomposer.org/installer | tee composer-setup.php | sha384sum -c composer-setup.php.sig \
    && php composer-setup.php && rm composer-setup.php* \
    && chmod +x composer.phar && mv composer.phar /usr/bin/composer

RUN docker-php-ext-install -j "$(nproc)" opcache pdo_mysql bcmath \
    && docker-php-ext-enable opcache bcmath

RUN set -ex; \
  { \
    echo "; Cloud Run enforces memory & timeouts"; \
    echo "memory_limit = -1"; \
    echo "max_execution_time = 0"; \
    echo "; File upload at Cloud Run network limit"; \
    echo "upload_max_filesize = 32M"; \
    echo "post_max_size = 32M"; \
    echo "; Configure Opcache for Containers"; \
    echo "opcache.max_accelerated_files = 20000"; \
    echo "realpath_cache_size = 4096K"; \
    echo "realpath_cache_ttl = 600"; \
    echo "opcache.validate_timestamps = Off"; \
    echo "; Configure Opcache Memory (Application-specific)"; \
    echo "opcache.memory_consumption = 256"; \
  } > "$PHP_INI_DIR/conf.d/cloud-run.ini"


RUN set -ex; \
  { \
    echo "opcache.enable = Off"; \
  } > "$PHP_INI_DIR/conf.d/custom_prod.ini"

RUN composer install
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"