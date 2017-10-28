#!/bin/sh

#Update the authorized_keys with users public key
cat /home/vagrant/.ssh/runner.pub >> /home/vagrant/.ssh/authorized_keys 

#Update the ansible binaries to latest. Current is 2.0.x
apt-add-repository ppa:ansible/ansible
apt-get update
apt-get -y install software-properties-common
apt-get -y install ansible

#Create the required ansible roles directory
mkdir /etc/ansible/roles -p
chmod 777 /etc/ansible/roles

#Setup default host as localhost and local connection only
echo "localhost	ansible_connection=local" >> /etc/ansible/hosts
