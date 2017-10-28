#!/bin/sh

#Update the authorized_keys with users public key
cat /home/vagrant/.ssh/runner.pub >> /home/vagrant/.ssh/authorized_keys 

#Update the ansible binaries to latest. Current is 2.0.x
apt-add-repository ppa:ansible/ansible
apt-get update
apt-get -y install software-properties-common
apt-get -y install ansible

