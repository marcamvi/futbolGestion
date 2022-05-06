<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __invoke() {
       return 'Bienvenid@ a la aplicación de gestión de tus equipos de fútbol y partidos.'; 
    }
    
}
