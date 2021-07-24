# Need
- Docker

- Composer
    - sudo apt-install composer

## Set-up on Windows (using WSL2) 

- [Instructions](https://nickjanetakis.com/blog/setting-up-docker-for-windows-and-wsl-to-work-flawlessly#configure-docker-for-windows) (Credit: Nick Janetakis)
     - [WSL2 Install](https://docs.microsoft.com/en-us/windows/wsl/install-win10)
     - Possible issue if installing from Windows (When following "Expose daemon" step ): https://github.com/docker/for-win/issues/10701

<!-- <!-- - PostGreSQL
    - sudo apt install postgresql-client-common
    - sudo apt-get install php-pgsql -->

# To Initialize (Creates docker container):
cd middleware 
composer update
./vendor/bin/sail up

# To view data
http://localhost

# Run the sail-docler to migrate and stuff

# If it doesn't work, please contact Frendy
