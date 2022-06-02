<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# futbolGestion
Este es un ejercicio práctico en el que se combina el aprendizaje del framework laravel 9 con php 8.0 mediante tailwindcss para las vistas. 

Es necesario tener instalado composer para hacer funcionar esta aplicación. Una vez descargada, desde terminal se deberá hacer las migraciones de las tablas de la base de datos por medio del comando php artisan migrate.

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
