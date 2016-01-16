# -*- mode: ruby -*-
# vi: set ft=ruby :

# Read JSON configuration files.
nodes_config = (JSON.parse(File.read("vagrant/config/nodes.json")))['nodes']
docker_config  = (JSON.parse(File.read("vagrant/config/docker.json")))['docker']

Vagrant.configure("2") do |config|

  config.vm.provision "shell", inline: "echo Welcome to the NoughtsAndCrosses development environment"

  config.vm.provision :docker

  nodes_config.each do |node|
    node_name   = node[0]
    node_values = node[1]

    config.vm.box = node_values[':box']
    config.vm.box_url = node_values[':box_url']

    config.vm.define node_name do |config|
      ports = node_values['ports']
      ports.each do |port|
        config.vm.network :forwarded_port,
          host:  port[':host'],
          guest: port[':guest'],
          id:    port[':id']
      end

      config.vm.hostname = node_values[':node']
      config.vm.network :private_network, ip: node_values[':ip']

      synced_folders = node_values['synced_folders']
      synced_folders.each do |synced_folder|
        config.vm.synced_folder synced_folder[':host'], synced_folder[':guest']
      end

      config.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", node_values[':memory']]
        vb.customize ["modifyvm", :id, "--name", node_values[':node']]
      end

      config.vm.provision "docker" do |docker|
        docker.build_image docker_config['build_image'][':path'],
          args: docker_config['build_image'][':args']
        docker.run docker_config['run'][':name'],
          image: docker_config['run'][':image'],
          args: docker_config['run'][':args']
      end
    end
  end
end
