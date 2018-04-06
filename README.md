# Workshop

## Pre-requirements:
   - PHP and MySql installed localy on computer (XAMPP, LAMP, MAMP ...) OR
   - install VirtualBox and Vagrant

## Installation:
        $ mkdir yourproject
        $ cd yourproject
        $ git clone https://bitbucket.org/JanMr/workshop-1 .
        $ php -S localhost:8000 -t public/ #for local php
        $ vagrant up #for vagrant

### Vagrant:
   - edit your /etc/hosts or windows c:\Windows\System32\Drivers\etc\hosts with
            
    192.168.10.10 homestead.test
        
