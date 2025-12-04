# --- Image PHP officielle avec Apache ---
FROM php:8.2-apache

# Active le module Apache mod_rewrite (utile pour routes propres)
RUN a2enmod rewrite

# Copie tout le code dans le dossier web Apache
COPY . /var/www/html/

# Donne les bons droits
RUN chown -R www-data:www-data /var/www/html

# Expose le port utilisé par Render
EXPOSE 10000

# Change le port Apache => Render attend un service sur 0.0.0.0:10000
RUN sed -i 's/80/10000/g' /etc/apache2/ports.conf \
    && sed -i 's/:80/:10000/g' /etc/apache2/sites-available/000-default.conf

# Démarre Apache
CMD ["apache2-foreground"]


RUN echo "display_errors = Off" >> /usr/local/etc/php/conf.d/custom.ini \
    && echo "display_startup_errors = Off" >> /usr/local/etc/php/conf.d/custom.ini \
    && echo "error_reporting = E_ALL & ~E_WARNING & ~E_NOTICE" >> /usr/local/etc/php/conf.d/custom.ini