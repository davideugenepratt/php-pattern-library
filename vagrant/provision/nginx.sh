#!/usr/bin/env bash

sudo apt-get update

sudo apt-get install -y nginx

sudo ufw allow 'Nginx HTTP'

sudo cp /vagrant/vagrant/provision/nginx/default /etc/nginx/sites-available/default

sudo service nginx restart