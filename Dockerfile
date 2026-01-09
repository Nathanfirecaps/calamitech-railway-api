FROM php:8.2-cli

WORKDIR /app

RUN docker-php-ext-install mysqli

COPY . .

# Railway injects PORT; fallback prevents crash
CMD sh -c "php -S 0.0.0.0:${PORT:-8080} -t /app"

