# Rock Advisor Web #

Description goes here.


## Install Software ##

This uses vagrant (and VirtualBox) to setup a virtual machine which will host the development application.

* Install VirtualBox
* Install Vagrant
* Get homestead vagrant box:

        vagrant box add laravel/homestead

* PHP -- so you can run composer. [http://php.net/]
* (Optional) Get Composer and install it **globally** from: [https://getcomposer.org/download/](https://getcomposer.org/download/). If you install this globally then you need to slightly tweak the composer lines below. You will not need the text `php composer` at the start of the commands.
* (Optional) to avoid some headaches with ssh keys on Windows get SourceTree [https://www.sourcetreeapp.com/]

## Getting a Development Version Running ##

* clone project:

        git clone ...
        cd rockadvisorweb
or

* using the SourceTree GUI:

        Clone / New
        Source Path / URL == HTTPS link from BitBucket - EG [https://ElasticParsley@bitbucket.org/rockadvisorteam/rockadvisorweb.git]
        Destination Path == Development Directory of your choice.
        Clone

* **Skip** this step if you installed Composer **globally**. You now need to download Composer so that you can run it **locally** from the project folder. Get Composer if you need it from: [https://getcomposer.org/download/](https://getcomposer.org/download/).

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
        http://rockadvisorweb-dev (you will need to edit your hosts file - see below)

## Libraries ##

The rockadvisorweb uses the following (html/css/js) libraries:
* None

## Editing Your Hosts File ##

You can access the nice "fake" URL by editing your hosts file. This basically stops your operating system doing a normal DNS lookup - you hard code the IP address of this "fake URL". You will only need to do this once.

You will need to change your hosts file to include the line

        192.168.10.10    rockadvisorweb-dev

This file is found at `c:\Windows\System32\Drivers\etc\hosts`

## Permission Problems ##

If you get permission denied errors try running:

        php artisan cache:clear 
        chmod -R 777 app/storage 
        php composer dump-autoload