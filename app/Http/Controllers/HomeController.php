<?php

namespace App\Http\Controllers;

use App\Models\entidade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __invoke() {
       $entidades = entidade::all(); 
       return view("Home", compact('entidades')); 
    }
   /* public function find($Nombre) {
        $entidades = entidade::find($Nombre);
        return view ("Entidad.indexEquipo", ['entidad'=> $entidades], compact('entidades'));
        
    }*/
    
}
