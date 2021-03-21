FROM php:7.4-apache

COPY www/ /var/www/
COPY install.sh /root/install.sh
COPY config.sh /root/config.sh
COPY entrypoint.sh /root/entrypoint.sh
COPY root.txt /root/root.txt
RUN bash /root/install.sh
RUN bash -c 'bash /root/config.sh'
RUN bash -c 'chown www-data:www-data /var/www/html -R'
RUN bash -c 'chown root:root /root/root.txt; chmod 600 /root/root.txt'  

RUN chmod 777 /root/entrypoint.sh

RUN bash /root/entrypoint.sh
