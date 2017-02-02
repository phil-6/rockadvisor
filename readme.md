# Rock Advisor Web #

Description goes here.

## Getting a Development Version Running ##

This uses vagrant (and VirtualBox) to setup a virtual machine which will host the development application.

* install VirtualBox
* install Vagrant
* get homestead vagrant box:

        vagrant box add laravel/homestead

* clone project:

        git clone ...
        cd rockadvisorweb

* Get Composer if you need it:

        php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
        php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
        php composer-setup.php
        php -r "unlink('composer-setup.php');"

* Install composer packages for rockadvisorweb:

        php composer.phar install --no-scripts
        php composer.phar install

* Configure homestead configuration files for the vagrant box:

        php vendor/bin/homestead make

* Launch vagrant box:

        vagrant up

* Copy (and modify) sample .env.exmaple file to .env

        cp .env.example .env

* Generate fresh application key (in .env):

        php artisan key:generate

* SSH into virtual machine:

        vagrant ssh

    * Change to the development directory:

            cd rockadvisorweb

    * Set up database:

            php artisan migrate

    * Seed database:

            php artisan db:seed

        or

            php artisan db:seed --class=ExampleDataDatabaseSeeder

* Exit SSH session
* Visit:
        http://rockadvisorweb-dev

## Libraries ##

The rockadvisorweb uses the following (html/css/js) libraries:
* None