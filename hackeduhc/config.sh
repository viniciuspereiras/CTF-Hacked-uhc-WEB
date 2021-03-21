#!/bin/bash

useradd -m john 
sudo -u john echo "uhc{345yP345y_GTF0b_Br0}" > /home/john/.user.txt
sudo -u john chmod 0750 /home/john
echo 'john:@$GuGP0G35@!#' | sudo chpasswd


echo "www-data ALL = (john) NOPASSWD: /usr/games/cowsay" >> /etc/sudoers
echo "john ALL=(ALL:ALL) NOPASSWD: /bin/sh" >> /etc/sudoers

 




