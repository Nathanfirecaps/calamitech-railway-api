FROM php:8.2-cli

WORKDIR /app

RUN docker-php-ext-install mysqli

COPY . .

# Railway provides PORT dynamically
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t ."]

