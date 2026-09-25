FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libsqlite3-dev \
    && docker-php-ext-install zip pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --optimize-autoloader --no-interaction --no-dev

RUN mkdir -p database \
    && touch database/database.sqlite

RUN php artisan migrate --force

RUN php artisan storage:link

EXPOSE 8080

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}

