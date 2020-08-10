FROM yiisoftware/yii-php:7.4-apache

# Create a symlink for apache (if `/var/www/html` is available)
#RUN rm -rf /var/www/html && ln -s /app/public/ /var/www/html || true

COPY 000-default.conf /etc/apache2/sites-available/
