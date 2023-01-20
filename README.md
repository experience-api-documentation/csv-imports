# Documentation

1. Clone this repository
2. Configure the 4 constants in common.php with your values 

## lists-informations.php
Retrieves all the lists you have access to, and each list available fields.

## add-subscriber.php
Add or Update one or more subscribers in a single call

## delete-subscribers.php
Remove one or more subscribers in a single call

# Tips : Test the script with docker

`docker run -it --rm -v $PWD:/home php:cli php /home/lists-informations.php`


windows command line syntax :

`docker run -it --rm -v %cd%:/home php:cli php /home/lists-informations.php`
