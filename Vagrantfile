# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "centos/7"
  config.vm.network "forwarded_port", guest: 80, host: 8081
  config.vm.network "private_network", ip: "192.168.10.11"
  config.vbguest.auto_update = true

  config.vm.provision "shell", path: "https://raw.githubusercontent.com/tienthinhturbo/vagrant-provisioner/master/scripts/sowable-centos7-vagrant"
  config.vm.synced_folder ".", "/vagrant", type: "virtualbox"

end
