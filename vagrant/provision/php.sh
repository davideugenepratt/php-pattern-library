#!/usr/bin/env bash

sudo apt-get update

sudo apt-get install -y php-fpm php-mysql curl zip unzip php7.0-gd php7.0-mcrypt php7.0-curl php7.0-intl php7.0-xsl php7.0-mbstring php7.0-zip php7.0-soap

sudo curl -sS https://getcomposer.org/installer | php

sudo mv composer.phar /usr/local/bin/composer

sudo cp /vagrant/vagrant/provision/php/php.ini /etc/php/7.0/fpm/php.ini

