# Utiliser une image officielle PHP avec Apache
FROM php:8.2-apache

# Activer mod_rewrite pour Apache
RUN a2enmod rewrite

# Configurer Apache pour autoriser .htaccess
RUN echo "<Directory /var/www/html/> \n\
    AllowOverride All \n\
    Require all granted \n\
</Directory>" > /etc/apache2/conf-available/allowoverride.conf \
    && a2enconf allowoverride

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
