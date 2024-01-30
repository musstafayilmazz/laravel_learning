FROM ubuntu:20.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y locales && rm -rf /var/lib/apt/lists/* \
    && localedef -i tr_TR -c -f UTF-8 -A /usr/share/locale/locale.alias tr_TR.UTF-8
ENV LANG tr_TR.utf8
ENV LANGUAGE tr_TR:tr
ENV LC_ALL tr_TR.UTF-8

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y \
    autoconf \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libpq-dev \
    locales \
    nano \
    libssl1.1 \
    libfontconfig1 \
    libxrender1 \
    libxext6

RUN apt-get update -y && apt-get upgrade -y && \
    locale-gen tr_TR && \
    locale-gen tr_TR.UTF-8 && \
    update-locale LANG="tr_TR.UTF-8" LANGUAGE="tr_TR" && \
    apt-get install software-properties-common -y && \
    add-apt-repository ppa:chris-needham/ppa -y && \
    apt-get install wget -y && \
    add-apt-repository ppa:ondrej/php -y && \
    apt-get update -y && \
    apt-get install php8.1-fpm -y && \
    apt-get remove --autoremove apache2* -y && \
    apt-get install -y php8.1-curl \
    php8.1-gd \
    php8.1-imap \
    php8.1-mbstring \
    php8.1-soap \
    php8.1-intl \
    php8.1-zip \
    php8.1-opcache \
    php8.1-imagick \
    php8.1-cli \
    php8.1-dev \
    php8.1-xsl \
    php8.1-xdebug \
    php8.1-igbinary \
    php8.1-APCu \
    php8.1-pgsql \
    zlib1g-dev \
    php8.1-dev \
    php-pear \
    supervisor \
    vim \
    openssl \
    curl && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    export LC_ALL="C" && \
    mkdir /www && \
    groupadd -g 1000 www && \
    useradd -u 1000 -ms /bin/bash -g www www && \
    chown -R www:www /www && \
    mkdir /run/php

RUN apt-get install -y --no-install-recommends \
    fontconfig \
    libfontenc1 \
    fontconfig-config \
    x11-common \
    xfonts-75dpi \
    xfonts-base \
    xfonts-encodings \
    xfonts-utils

RUN cd /tmp && \
    wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.focal_amd64.deb && \
    dpkg -i wkhtmltox_0.12.6-1.focal_amd64.deb && \
    apt-get install -f -y && \
    ln -s /usr/local/bin/wkhtmltopdf /usr/bin && \
    ln -s /usr/local/bin/wkhtmltoimage /usr/bin

WORKDIR /www

EXPOSE 9000

ENTRYPOINT [ "/usr/sbin/php-fpm8.1","-F" ]

#docker build -t iso50001/php80:1.0 .

