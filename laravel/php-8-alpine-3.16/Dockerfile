# alpinr and php8 and laravel8
FROM  alpine:3.16.2

RUN echo "nameserver 8.8.8.8" >> /etc/resolv.conf && \
    apk update && apk upgrade && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-bcmath-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-fpm-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-calendar-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/aarch64/php8-ctype-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/aarch64/php8-curl-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/date-3.0.1-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-dom-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-exif-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-fileinfo-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-ftp-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-gd-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-gettext-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-iconv-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-intl-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/aarch64/php8-mbstring-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-pecl-mcrypt-1.0.4-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-mysqli-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-mysqlnd-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-openssl-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-pcntl-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-pdo-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-pdo_mysql-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-phar-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-posix-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-session-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-shmop-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-simplexml-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-soap-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-sockets-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-sodium-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-sysvmsg-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-sysvsem-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-sysvshm-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-tokenizer-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-xml-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-xmlreader-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-xmlwriter-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-xsl-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-zip-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/main && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community && \
    apk add --no-cache --repository http://dl-3.alpinelinux.org/alpine/latest-stable/main && \
    apk add --no-cache --repository http://dl-3.alpinelinux.org/alpine/latest-stable/community && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-ffi-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/main/x86_64/readline-8.1.2-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-gmp-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-imap-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-mysqli-8.0.22-r0.apk && \
    apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-pdo_mysql-8.0.22-r0.apk 
    # apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.16/community/x86_64/php8-bz2-8.0.22-r0.apk

# -> netcat    apk add --no-cache --repository https://distfiles.adelielinux.org/adelie/1.0/user/x86_64/netcat-7.80-r0.apk


RUN echo "nameserver 8.8.8.8" >> /etc/resolv.conf && \
    apk update && apk upgrade && \
    apk add --upgrade php8 && \
    apk add --upgrade php8-fpm && \
    apk add --upgrade php8-bcmath && \
    apk add --upgrade php8-calendar && \
    apk add --upgrade php8-ctype && \
    apk add --upgrade php8-curl && \
    apk add --upgrade date && \
    apk add --upgrade php8-dom && \
    apk add --upgrade php8-exif && \
    apk add --upgrade php8-fileinfo && \
    apk add --upgrade php8-ftp && \
    apk add --upgrade php8-gd && \
    apk add --upgrade php8-gettext && \
    apk add --upgrade php8-iconv && \
    apk add --upgrade php8-intl && \
    apk add --upgrade php8-mbstring && \
    apk add --upgrade php8-pecl-mcrypt && \
    apk add --upgrade php8-mysqli && \
    apk add --upgrade php8-mysqlnd && \
    apk add --upgrade php8-openssl && \
    apk add --upgrade php8-pcntl && \
    apk add --upgrade php8-pdo && \
    apk add --upgrade php8-pdo_mysql && \
    apk add --upgrade php8-phar && \
    apk add --upgrade php8-posix && \
    apk add --upgrade php8-session && \
    apk add --upgrade php8-shmop && \
    apk add --upgrade php8-simplexml && \
    apk add --upgrade php8-soap && \
    apk add --upgrade php8-sockets && \
    apk add --upgrade php8-sodium && \
    apk add --upgrade php8-sysvmsg && \
    apk add --upgrade php8-sysvshm && \
    apk add --upgrade php8-tokenizer && \
    apk add --upgrade php8-xml && \
    apk add --upgrade php8-xmlreader && \
    apk add --upgrade php8-xmlwriter && \
    apk add --upgrade php8-xsl && \
    apk add --upgrade php8-zip && \
    apk add --upgrade apache2 && \
    apk add --upgrade php8-json && \
    apk add --upgrade php8-opcache && \
    apk add --upgrade php8-ffi && \
    apk add --upgrade readline && \
    apk add --upgrade php8-gmp && \
    apk add --upgrade php8-imap && \
    apk add --upgrade php8-mysqli && \
    apk add --upgrade php8-pdo_mysql
    # apk add --upgrade php8-bz2


RUN echo "nameserver 8.8.8.8" >> /etc/resolv.conf && \
    apk add vim && \
    apk add bash && \
    apk add net-tools && \
    apk add nano && \
    apk add wget && \
    apk add curl && \
    apk add htop && \
    apk add util-linux && \
    apk add zip && \
	apk add less && \
    apk add git
	# apk add iputils-ping && \
    # apk add netcat


RUN echo "nameserver 8.8.8.8" >> /etc/resolv.conf && \
    apk update && \
    apk add rsync && \
    apk add openrc --no-cache && \
    mkdir -p /run/apache2 && \
    mkdir -p /run/openrc && \
    mkdir -p /run/php && \
    touch /run/php/php8.0-fpm.pid && \
    touch /run/openrc/softlevel 

RUN echo "nameserver 8.8.8.8" >> /etc/resolv.conf && \
    wget -c https://getcomposer.org/download/2.2.0/composer.phar -O  /usr/local/bin/composer2 && \
    wget -c https://getcomposer.org/download/1.10.0/composer.phar -O  /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer*

COPY ./start-service.sh /var/www/html/start-service.sh
# COPY ./composer.json /var/www/html/composer.json
# COPY ./php.ini /etc/php8/php.ini
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
WORKDIR /var/www/html/
ENV USER www-data
ENV GROUP www-data
EXPOSE 80


CMD  [ "/usr/sbin/httpd", "-D", "FOREGROUND"]

#composer2 create-project laravel/laravel