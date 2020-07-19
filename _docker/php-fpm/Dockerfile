FROM php:7.4-fpm

# install middleware
RUN apt-get update \
&& apt-get install -y \
  git \
  zip \
  unzip \
  vim \
  libpq-dev \
&& docker-php-ext-install \
  pdo_mysql

# add aliases
RUN echo "alias ll='ls -l'" >> ~/.bashrc

# install composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
RUN composer global require "hirak/prestissimo"

# make mount bind directories
RUN mkdir -p /bind_mount/vendor /bind_mount/views /bind_mount/cache && chmod -R 777 /bind_mount

# fstab 記載内容通りにマウントされない
#RUN echo "/bind_mount/vendor /srv/www/gmbservice/vendor none bind 0 0" >> /etc/fstab
#RUN echo "/bind_mount/views /srv/www/gmbservice/storage/framework/views none bind 0 0" >> /etc/fstab
#RUN echo "/bind_mount/cache /srv/www/gmbservice/storage/framework/cache/data none bind 0 0" >> /etc/fstab

WORKDIR /src/www/todo_app
