<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function indexEquipo ($entidad) {
        return "Bienvenid@ $entidad. Esta es una vista de todos tus equipos. Selecciona el equipo a gestionar.";
    }
    public function createEquipo ($entidad) {
        return "Bienvenid@ a la creación de equipos";
    }
    
    public function showEquipo ($entidad, $equipo) {
        return "Bienvenid@ al equipo $equipo. Esta es una vista de todos los partidos del equipo. Selecciona el equipo a gestionar.";
    }
    
    public function createPartido ($entidad, $equipo) {
        return "Bienvenid@ a la creación de partidos.";
    }
    public function createResultado ($entidad, $equipo, $partido) {
       return "Bienvenid@ a la creación de resultados"; 
    }
}
