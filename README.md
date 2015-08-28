# Zend Framework 2 Sample Structure
A Zend Framework 2 sample folder structure for projects.

## Folders:
* application/: This directory contains the application itself.
  * models/: files related to database models.
  * module/: The application modules.
* config/: The application-wide configuration directory.
* data/: This directory provides a place to store application data that is volatile and possibly temporary.
* helpers/: Application helpers.
* library/: This directory is for common libraries on which the application depends.
* public/: This directory contains all public files for your application.
* scripts/: This directory contains maintenance and/or build scripts. Such scripts might include command line, cron, or phing build scripts that are not executed at runtime but are part of the correct functioning of the application.
* temp/: The temp/ folder is set aside for transient application data.
* tests/: This directory contains application tests.

More info about folder structure: http://framework.zend.com/manual/2.0/en/ref/project.structure.html

## Installation
Clone this repo:

    git clone https://github.com/hmschreiner/zf2-sample.git
    
Install dependencies (via composer):

    composer install
