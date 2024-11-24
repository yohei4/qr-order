FROM php:8.3-apache

# copy file.
COPY ./config/php/php.ini /usr/local/etc/php/
COPY ./config/apache/*.conf /etc/apache2/sites-enabled/

# install packages.
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y sudo \
    gcc \
    make \
    git \
    zip \
    unzip \
    vim \
    curl \
    locales \
    acl

# install node JS.
RUN apt-get update -y
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
RUN apt-get install -y nodejs

# install Extentions php.
RUN apt-get update -y
RUN apt-get install -y libzip-dev \
    zlib1g-dev \
    libpng-dev \
    libmcrypt-dev \
    libicu-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libcurl3-dev
RUN docker-php-ext-install intl pdo_mysql zip curl fileinfo bcmath

# install xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# install composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# setting apache2.
RUN a2enmod rewrite && \
    sudo a2dissite 000-default.conf

# switch host user.
ARG UID=1000
ARG GID=1000
ARG USER=yohei
ARG GROUP=yohei
ARG PASS=yohei
RUN groupadd -g $GID $GROUP && \
    useradd -m -s /bin/bash -u $UID -g $GID -G sudo $USER && \
    echo $USER:$PASS | chpasswd && \
    echo "$USER ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers
USER ${USER}:${GROUP}
WORKDIR /home/${USER}

CMD ["/bin/bash"]
