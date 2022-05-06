<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function indexEquipo ($entidad) {
        return view ("Entidad.indexEquipo", ['entidad'=> $entidad]);
    }
    public function createEquipo ($entidad) {
        return view ("Entidad.createEquipo", ['entidad'=> $entidad]);
    }
    
    public function showEquipo ($entidad, $equipo) {
        return view ("Entidad.showEquipo", ['entidad'=> $entidad, 'equipo'=> $equipo]);
    }
    
    public function createPartido ($entidad, $equipo) {
        return view ("Entidad.createPartido", ['entidad'=> $entidad, 'equipo'=> $equipo]);
    }
    public function createResultado ($entidad, $equipo, $partido) {
       return view ("Entidad.createResultado", ['entidad'=> $entidad, 'equipo'=> $equipo, 'partido'=> $partido]); 
    }
}
