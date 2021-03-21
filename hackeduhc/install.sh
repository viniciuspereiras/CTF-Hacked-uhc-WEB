#!/bin/bash
export DEBIAN_FRONTEND="noninteractive"
apt-get update -y
apt-get install -y lsb-release
apt-get install -y gnupg
apt-get install -y wget
apt-get install -y libcap2-bin
apt-get install -y nano
apt-get install -y cowsay
apt-get install -y python2.7
apt-get install -y netcat
apt-get install -y gcc
apt-get install -y sudo
apt-get install -y net-tools