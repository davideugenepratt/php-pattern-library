# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/xenial64"

  config.vm.network "private_network", ip: "192.168.69.10"

  config.berkshelf.enabled = true
  config.vm.provision "chef_solo" do |chef|
    chef.add_recipe "php-box-core"
    chef.add_recipe "php-box-core::dev"
  end
  config.vm.provision "shell", path: "vagrant/provision/nginx.sh"
end
