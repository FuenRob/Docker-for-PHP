# Docker for Prestashop
## Prerequisites
This is the minimum you should have on your installed computer:
* Install Docker Compose: Guide on this [link](https://docs.docker.com/compose/install/)
* In my case, I have installed [visual studio code](https://code.visualstudio.com/)

## Services
* MySQL
* Apache

## Features Standard
* xDebug

## Pre-install
You must enter the mysql container and give permissions to the user you want with the following commands, in my case I will use the root user:
```
docker-compose exec db mysql -h localhost -u root -p
```
**Normally it allows you to enter with root without password, if not, you must put the one indicated in the file docker-compose.yml.**

Once inside the container we launch the following commands
```
mysql> CREATE USER 'root'@'%' IDENTIFIED BY 'root_password';
mysql> GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;
mysql> FLUSH PRIVILEGES;
```
