<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# futbolGestion
Este es un ejercicio práctico en el que se combina el aprendizaje del framework laravel 9 con php 8.0 mediante tailwindcss para las vistas. 

Pasos previos: 
- Para el uso de esta aplicación es necesario tener instalado un entorno de desarrollo como XAMPP y tener activados los módulos de APACHE y MySQL.
- Clonar el repositorio con el comando git clone https://github.com/marcamvi/futbolGestion. En caso de trabajar con XAMPP, es importante clonarlo en la carpeta de htdocs de xampp.
- Una vez clonado el proyecto será necesario instalar las dependencias. Deberás tener composer instalado o descargarlo e instalarlo desde el siguiente link https://getcomposer.org/download/ e instalarlo (es posible que debas reiniciar el ordenador para que lo detecte correctamente). Desde la terminal, dentro del directorio del proyecto, será necesario aplicar el comando composer install.
- Dentro del proyecto se deberá copiar el archivo con nombre .env.example y renombrar por .env
- Accediendo a este archivo, donde pone DB_DATABASE = se escribirá futbolgestion en caso de que no se haya generado correctamente.
- Se necesitará una Key que se generará desde terminal con el compando php artisan key:generate.
- Se deberá crear una base de datos vacía, para ello puede utilizarse, por ejemplo, PHPmyAdmin o MySQL Workbench. Esta base de datos debe llevar por nombre futbolgestion. Collation utilizado 'utf8mb4_general_ci'. En caso de crear la base de datos por temrinal en lugar de por interfaz, el comando será el siguiente: mysql -u root -p : CREATE DATABASE futbolgestion CHARACTER SET utf8 COLLATE utf8mb4_general_ci;
- Desde terminal se deberá hacer las migraciones de las tablas de la base de datos por medio del comando php artisan migrate. Con tal de que coja los seeders, se deberá utilizar el comando php artisan migrate:fresh --seed
- A partir de aquí, debería poderse acceder a la aplicación por medio de localhost/futbolGestion/public/

En este ejercicio puede verse una página web de gestión de equipos de quidditch (¡el fútbol de los magos!) en la cual podremos crear equipos en función de la casa de Hogwarts. 

Todo se vehicula a través de la casa o entidad, tal como la recoge el programa, seleccionada desde el Home:
![Home](https://raw.githubusercontent.com/marcamvi/futbolGestion/main/asset/home.png)

Una vez dentro de la casa de Hogwarts (o entidad) no sólo podremos crear equipos
![equipos](https://raw.githubusercontent.com/marcamvi/futbolGestion/main/asset/equipo.png)

sino que también seremos capaces de calendarizar partidos
![partidos](https://raw.githubusercontent.com/marcamvi/futbolGestion/main/asset/partido.png)
y añadir resultados, aunque para ello será necesario que el partido esté en estado "Jugado".
![resultados](https://raw.githubusercontent.com/marcamvi/futbolGestion/main/asset/resultado.png)

Excepto en la tabla vehicular de entidades, en todas las otras tablas de la base de datos puede realizarse un CRUD.
