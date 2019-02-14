# Bugs

[Visit the project](http://pixeline.github.io/bugs/)

![Printscreen](http://pixeline.github.io/bugs/images/bugs-index.png "Main screen")

# Installing Bugs

- Create a MySQL Database  ( note name and password, you will need them during install process )
- Make /uploads/ write-able ( CHMOD -R  770 )
- set  www-data  ( CHOWN -R www-data:www-data )  as owner of the Bugs's main directory and sub-directories
- Open index.php ... it should bring you to ./install/index.php page and open the installation forms
- Delete or rename /install/

Enjoy!

# Upgrading from a previous installation

- backup config.app.php and your uploads folder.
- simply replace the codebase with the new version (via an ftp client such as Filezilla).
- make sure your uploads folder and config.app.php are still there
- If necessary, add this line to your config.app.php -> please see the last config.app.example.php

# Installing with docker

## with dockerfile

Requirements :
- [dockerCE](https://www.docker.com)

you can run bugs with the dockerfile in the folder, you must precise sevrals environement variables to make the docker work :
- APP_DB_HOST : your database host
- APP_DB_NAME : your database name
- APP_DB_USER : your database user
- APP_DB_PASSWORD : your database password
- APP_TZ : your timezone
- APP_SMTP_SENDER : your smtp sender
- APP_SMTP_EMAIL : your smtp email
- APP_SMTP_PASSWORD : your smtp password

## with docker-compose

Requirements :
- [dockerCE](https://www.docker.com)
- [docker-compose](https://docs.docker.com/compose/install/)

Simply run :
```
docker-compose up -d
```
it will create :
- a local mariadb database
- the apache container (  [on port 80](http://localhost/) with email : myemail@email.com , password : admin )
- phpmyadmin for monitoring (  [on port 8080](http://localhost:8080/) with login : bugs , password : password )

the database is persisted while you dont move stop the container, or move/delete `../volumes/mariadb`


## Requirements:

- Tested on: Apache, IIS
- PHP 5.3+  :  ready for PHP 7.0.18; works good under PHP 7.2
- MySQL 5+
- PDO Extension for PHP (MySQL)
- MCrypt Extension for PHP : soon MCrypt will be removed from Bugs project
- Javascript Enabled - Bugs also uses heavy Javascript to make it easier to use

### How to contribute

We welcome and appreciate all contributions. The `develop` branch is the branch you should base all pull requests and development off of.
The `master` branch is tagged releases only.

For any coding contribution, please use a git tool ( visit https://git-scm.com/book/fr/v2/D%C3%A9marrage-rapide-Installation-de-Git to know more ).
Then, push you modification throw a new branch. NEVER push on master.

# Changelog
- v.1.6 : soon
	- please visit [Nice changes to come](https://github.com/pixeline/bugs/projects)
- v.1.5.2b : 23 septembre 2018
	- Wysyg text editor  ( you can install the one you like )
	- sorting project's issues
	- filtering project's issues
	- upload and attach file to an issue
	- automatized installation (better than before)
	- linked to report system (optionnal, report system from another git deposit)
- v.1.5.2 : 15 March 2017
	- reassign issue
	- email system based on PHPmail: work every time you change assignation
	- projects sorted by name
	- percentage work done
	- percentage time passed before deadline
	- every single word on screen may be translated by app/application/language files
	- install in many language

- v1.5 : 12 July 2015:
	- fix: Time Display format now configurable, see config.example.php
	- fix: SQL « tags » table not included during installation
	- fix: Bugs assets now load correctly if inside a subfolder

various layout tweaks.

- v1.2 : 28 August 2014:
	- French translation updates
	- Various fixes
	- Multilingual email (code by [Wolfgang Gassler](http://wolfgang.gassler.org/) - [source](https://github.com/mikelbring/tinyissue/pull/197))
	- Kanban-style planning board (code by [Steve McCullough](http://irrational.ca/) - [source](https://github.com/mikelbring/tinyissue/pull/194))
- v1.1 : 26 August 2014:
	- Tags (code by [Anton Kanevsky](http://about.me/akanevsky) - [source](https://github.com/mikelbring/tinyissue/pull/180) )
	- Visual identity. Project rebaptized Bugs. As in "Hugs", with a B.
- v1.0 : 25 August 2014:
	- project forked from Tiny Issue 1.3, by [Michael Hasselbring](http://michaelhasselbring.com), [Zachary Hoover](http://zachoover.com) and [Suthan Sangaralingham](http://suthanwebs.com/)

# Main Developers

- [Alexandre Plennevaux](https://pixeline.be) ... to 2016
- [Patrick Allaire, ptre](http://cartefoi.net) from 2016 to now
