Install:

ddev config 

ddev auth ssh

ddev start

ddev ssh

In Container Frondend Build
* composer install (Install Laravel and Dependencies )
* yarn install (Frondend Dependencies)
* npm run development (Frondend Build)


Infos:

.ddev/config.yaml
php_version: "8.0" 

.env 
DB_CONNECTION=mysql
DB_HOST=ddev-Probearbeit-db
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=root
DB_PASSWORD=root
