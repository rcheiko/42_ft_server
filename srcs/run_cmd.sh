# PHPMYADMIN

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages /var/www/html/phpmyadmin
service mysql start
cp ./config.inc.php /var/www/html/phpmyadmin/
mysql < /var/www/html/phpmyadmin/sql/create_tables.sql -u root
echo "GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'roro'@'localhost' IDENTIFIED BY 'pass';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp
chown -R www-data:www-data /var/www/html/phpmyadmin
# SSL

mkdir etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=FR/ST=Nice/L=Nice/O=42 School/OU=romain/CN=localhost"

# WORDPRESS

echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'roro'@'localhost' IDENTIFIED BY 'pass';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
apt -y install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
cp ./wp-config.php /var/www/html/wordpress/wp-config.php

mv var/www/html/index.nginx-debian.html var/www/
if [ "$autoindex" = "off" ]
then
	mv var/www/index.nginx-debian.html var/www/html/
fi

#start

service nginx start
service php7.3-fpm start
service mysql restart
sleep infinity
