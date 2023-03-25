# Crud TEST

## Descripción
Se presenta el siguiente desarrollo de un CRUD elaborado con laravel

##  Definiciones

## Tecnologías usadas
  * [Laravel 10](https://laravel.com/docs/10.x)
  * [Laravel sail](https://laravel.com/docs/10.x/sail)
  * [Laravel breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)
  * [Spatie](https://spatie.be/docs/laravel-permission/v5/installation-laravel)
  * [Filament](https://filamentphp.com/docs/2.x/admin/installation)
  * [MySQL](https://www.mysql.com)
  * [TailWindCSS](https://tailwindcss.com)

## Requerimientos previos
  * [PHP 8](https://www.php.net/downloads)
  * [Composer](https://getcomposer.org)
  * [Docker](https://www.docker.com/products/docker-desktop/)

## Insatalación del proyecto
### Clonar el repositorio
```
$ https://github.com/Kevam97/CrudTest.git
```

### Instalar dependencias

```
$ cd CrudTest
$ composer install
```

## Configuración
### Variables de entorno
Crear el fichero `.env` para el almacenamiento de las variables de entorno
```
$ cp .env.example .env
```
Una vez creado el fichero ingresar a el y configurar el usuario y contraseña de la base de datos a la cual se va a apuntar
### Generar una key
```
$ php artisan key:generate
```
Después de crearla validar que se haya incluido al inicio del fichero `.env`

## Iniciar servidor local
Para arrancar un servidor local se debe configurar desde su terminal el alias `sail` o en su defecto utilizar `./vendor/bin/sail`, revise la documentacion si es [necesario](https://laravel.com/docs/10.x/sail#configuring-a-shell-alias)

```
$ sail up -d
```

## Correr las migraciones
Para ejecutar las migraciones

```
$ sail artisan migrate --seed
```

Se recalca que los paises se guardan en una tabla pero consume el servicio solicitado, lo puede verificar en `CountriesSeeder`

## Rutas del proyecto

Para registrar un usuario

```
$ http://localhost/register
```

Para acceder al adminitrativo con el usuario `test@example.com` y contraseña `password`

```
$ http://localhost/admin/login
```

Para acceder a la plataforma normal

```
$ http://localhost/login
```

Para verificar el envio de correos
```
$ http://localhost:8025/
```

