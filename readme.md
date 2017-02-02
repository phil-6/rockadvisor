# Rock Advisor Web #

Description goes here.


## Install Software ##

This uses vagrant (and VirtualBox) to setup a virtual machine which will host the development application.

* Install VirtualBox
* Install Vagrant
* Get homestead vagrant box:

        vagrant box add laravel/homestead

* PHP -- so you can run composer.
* (Optional) Get Composer and install it globally from: [https://getcomposer.org/download/](https://getcomposer.org/download/). If you install this globally then you need to slightly tweak the composer lines below.

## Getting a Development Version Running ##

* clone project:
        git clone ...
        cd rockadvisorweb

* Skip this step if you installed Composer globally. You now need to download Composer so that you can run it from the project folder. Get Composer if you need it from: [https://getcomposer.org/download/](https://getcomposer.org/download/).

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

## Other Bits ##

You will need to change your hosts file to include the line

        192.168.10.10    rockadvisorweb-dev

This file is found at `c:\Windows\System32\Drivers\etc\hosts`

If you get permission denied errors run:

        php artisan cache:clear 
        chmod -R 777 app/storage 
        composer dump-autoload