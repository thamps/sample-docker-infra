# sample-docker-infra
---------------------
A simple docker infrastructure built using Ansible, Vargrant, Virtualbox and Docker. This project is built to showcase a simple integration of DevOps tools to provision a development server with containerised applications. 2 Container applications will be deployed - webapp and mysqldb.

### Host System Requirements:
- Vagrant 1.8.1
- Virtualbox
- Internet External Access (Github,apt-get,yum,docker.io)

###### Note: The above requirements are required to provision a Guest VM instance with the newer version of Ansible and Docker-CE. The vagrant box image used does not contain the recent versions of these tools required for this project. Ansible has updated with their docker integrations with Ansible 2.1 and above.

### Guest VM Instance:
- Ubuntu 14.0.4 64-bit
- Ansible > 2.4
- Docker-CE

### Provision:
`git clone https://github.com/thamps/sample-docker-infra`

`vagrant up`

### Test:

[Web Test Page] (http://Guest_VM_IP or http://localhost:9999)

[PHP APP Page] (http://Guest_VM_IP/index.php or http://localhost:9999/index.php)

