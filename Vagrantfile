# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/xenial64"

  config.vm.network "private_network", ip: "192.168.13.13"

    config.vm.provider "virtualbox" do |vb|

      vb.memory = "4096"

      vb.cpus =4

    end

    config.vm.provision "shell", path: "vagrant/provision/nginx.sh"

    config.vm.provision "shell", path: "vagrant/provision/mysql.sh"

    config.vm.provision "shell", path: "vagrant/provision/php.sh"

end
