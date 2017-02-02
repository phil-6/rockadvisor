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
php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
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