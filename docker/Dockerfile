FROM php:8.2-apache

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    zip \
    && docker-php-ext-install zip

# Activer mod_rewrite
RUN a2enmod rewrite

# Copier la configuration Apache personnalisée
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Définir le répertoire de travail
WORKDIR /var/www/codicoda.fr/www