# Need
- [Docker Compose] (https://docs.docker.com/compose/install/)

- Or do this

    - sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

    - sudo chmod +x /usr/local/bin/docker-compose

- Install docker btw

- Composer
    - sudo apt-indtall composer

<!-- - PostGreSQL
    - sudo apt install postgresql-client-common
    - sudo apt-get install php-pgsql

- PHP 
    - sudo apt-get update
    - sudo apt install php-xml
    - sudo apt-get install php-mbstring
    - composer update
    - composer require cviebrock/eloquent-sluggable
 -->

# To Initialize (Creates docker container):
cd middleware && ./vendor/bin/sail up

# To view data
http://localhost

# Run the sail-docler to migrate and stuff

# If it doesn't work, please contact Frendy
