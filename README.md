# PHP LAMP - User manager
Stay hydrated

## Sources
```./www/```

## Questions
- 4.2 : OK
- 5.1 : OK
- 6.1 : OK
- 7.1 : OK
- 8.1 : OK

## Prerequisite
- docker
- docker-compose

## Usage

### Launch app

Clone the project.
```
git clone https://github.com/PLsergent/php-stay_hydrated_cfa.git
```

Then execute:<br/>
*You may have to use sudo.*
```
docker-compose build
docker-compose up
```
*This will take a little while (like 1min).*

### Replace mysql container Ip address

Go to the file :
```./www/Model/Connexion.php```

You will have to replace the ip address of the mysql docker based on your docker ip address.

Execute ```docker ps``` and get the id from the container **png-mysql**.

Then execute ```docker inspect <container_id>``` and you'll be able to get the ip address amoung all the informations given on your mysql docker.

Now replace the ip address in the file.

### App running
http://localhost

You have now access to several link.

phpMyAdmin :
- username : root
- password : tiger
