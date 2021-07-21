FROM debian:buster
RUN apt -y update
RUN apt -y install nginx
RUN	apt -y install -y php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline
RUN apt -y install wget
RUN apt -y install mariadb-server mariadb-client
RUN apt -y install openssl
COPY srcs/default /etc/nginx/sites-available/default
COPY srcs/config.inc.php ./config.inc.php
COPY srcs/phpmyadmin.conf /etc/nginx/conf.d/phpmyadmin.conf
COPY srcs/wp-config.php ./
COPY srcs/run_cmd.sh ./
COPY srcs/wordpress ./var/www/html/wordpress
CMD	bash run_cmd.sh
