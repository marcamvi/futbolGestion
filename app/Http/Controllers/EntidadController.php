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
    

    
    public function createPartido ($entidad) {
        return view ("Entidad.createPartido", ['entidad'=> $entidad]);
    }
    public function createResultado ($entidad) {
       return view ("Entidad.createResultado", ['entidad'=> $entidad]); 
    }
}
