FROM node:20-alpine AS frontend-builder
WORKDIR /app

COPY package.json package-lock.json ./

RUN npm install

COPY . .

RUN npm run build

FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-interaction --no-dev --optimize-autoloader

COPY . .

COPY --from=frontend-builder /app/dist ./dist

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80


