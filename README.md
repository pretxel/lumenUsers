## Auth Core ##

**Auth Core** es una pequeña aplicación utilizando Lumen con redis.

### Instalacion ###

* `git clone https://github.com/pretxel/lumenUsers.git`
* `cd lumenUsers`
* `composer install`
* Crear la base de datos y crea el archivo *.env* (remove *.example*)
* `php artisan migrate` para crear las tablas
* `php artisan db:seed` para poblar las tablas


### Instalación Redis ###
* `wget http://download.redis.io/redis-stable.tar.gz`
* `tar xvzf redis-stable.tar.gz`
* `cd redis-stable
* `make`

#### Para mas información `http://redis.io/topics/quickstart` ####
