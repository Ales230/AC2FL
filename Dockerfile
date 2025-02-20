# Utiliser une image officielle PHP avec Apache
FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copier les fichiers de l'application
COPY . /var/www/html/

# Donner les permissions nécessaires
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80

# Démarrer Apache
CMD ["apache2-foreground"]
