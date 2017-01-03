#!/bin/bash

# https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-16-04

# For supported distro
# https://apt.dockerproject.org/repo/dists/

sudo apt-get update
sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D
sudo apt-add-repository 'deb https://apt.dockerproject.org/repo ubuntu-xenial main' # Mint 18.0X
# sudo apt-add-repository 'deb https://apt.dockerproject.org/repo ubuntu-trusty main' # Mint 17.0X
sudo apt-get update

# Make sure you are about to install from the Docker repo instead of the default Ubuntu 16.04 repo
apt-cache policy docker-engine

# Install Docker
sudo apt-get install -y docker-engine

# Check install
sudo systemctl status docker





