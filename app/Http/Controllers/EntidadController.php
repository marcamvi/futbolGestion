<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\entidade;
use App\Models\partido;
use App\Models\resultado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntidadController extends Controller {
    /* public function indexEq (Request $request) {
      $entidad = equipo::find(1)->entidade;
      dd($entidad);
      } */
    /* public function find(Request $request){
      $entidad=$request->get('entidad');
      $entidades=DB::table('entidades')->select('id', 'Nombre')
      ->where('Nombre', 'Like', $entidad);
      return compact('entidades', 'entidad');
      } */
    /*  public function indexEnt (Request $request) {
      $equipo = entidade::find(1)->equipo;
      dd($equipo);
      } */

    public function indexEquipo($entidad) {
        $equipos = equipo::all();
        return view("Entidad.indexEquipo", ['entidad' => $entidad], compact('equipos'));
    }

    /* public function show ($entidad){
      $equipostable=DB::table('equipos')->select('Nombre_Equipo, entidad_id')
      ->join ()
      ->where($entidad, "=", 'entidad_id');
      } */

    public function createEquipo(Request $request, $entidad) {
        $equipo = new equipo();
        $equipo->Nombre_equipo = $request->nuevoEquipo;
        $equipo->entidad_id = $entidad;
        $equipo->save();

        return redirect()->route("entidades.indexEquipo", ['entidad' => $entidad]);
    }

    public function editEquipo($entidad, equipo $equipo) {
        return view("Entidad.editEquipo", ['entidad' => $entidad], compact('equipo'));
    }

    public function updateEquipo($entidad, equipo $equipo, Request $request) {
        $equipo->Nombre_equipo = $request->editarEquipo;

        $equipo->save();
        return redirect()->route("entidades.indexEquipo", ['entidad' => $entidad]);
    }

    public function deleteEquipo($entidad, equipo $equipo) {
        $equipo->delete();
        return redirect()->route("entidades.indexEquipo", ['entidad' => $entidad]);
    }

    public function indexPartido($entidad) {
        $partidos = partido::all();
        $equipos = equipo::all();
        return view("Entidad.createPartido", ['entidad' => $entidad], compact('partidos', 'equipos'));
    }

    public function createPartido(Request $request, $entidad) {

        $partido = new partido();
        $partido->Fecha = $request->date;
        $partido->Hora = $request->time;
        $partido->Estado = $request->estado;
        $partido->resultado_id = $request->get('resultado_id', null);
        $partido->visitante_id = $request->equipoVisitante;
        $partido->local_id = $request->equipoLocal;
        $partido->save();

        return redirect()->route("entidades.indexPartido", ['entidad' => $entidad]);
    }

    public function editPartido($entidad, partido $partido) {
        $equipos = equipo::all();
        return view("Entidad.editPartido", ['entidad' => $entidad], compact('partido', 'equipos'));
    }

    public function updatePartido($entidad, partido $partido, Request $request) {

        $partido->Fecha = $request->date;
        $partido->Hora = $request->time;
        $partido->Estado = $request->estado;
        $partido->resultado_id = $request->get('resultado_id', null);
        $partido->visitante_id = $request->equipoVisitante;
        $partido->local_id = $request->equipoLocal;
        $partido->save();

        return redirect()->route("entidades.indexPartido", ['entidad' => $entidad]);
    }

    public function deletePartido($entidad, partido $partido) {

        $partido->delete();

        return redirect()->route("entidades.indexPartido", ['entidad' => $entidad]);
    }

    public function indexResultado($entidad) {
        $partidos = partido::all();
        $resultados = resultado::all();
        return view("Entidad.createResultado", ['entidad' => $entidad], compact('partidos', 'resultados'));
    }

    public function createResultado(Request $request, $entidad) {

        $resultado = new resultado();
        $resultado->Resultado_equipo_local = $request->nuevoResultadoLocal;
        $resultado->Resultado_equipo_visitante = $request->nuevoResultadoVisitante;
        $resultado->save();

        return redirect()->route("entidades.indexResultado", ['entidad' => $entidad]);
    }

    public function editResultado($entidad, resultado $resultado) {
        $partidos = partido::all();
        return view("Entidad.editResultado", ['entidad' => $entidad], compact('resultado', 'partidos'));
    }

    public function updateResultado($entidad, resultado $resultado, Request $request) {
        $resultado->Resultado_equipo_local = $request->nuevoResultadoLocal;
        $resultado->Resultado_equipo_visitante = $request->nuevoResultadoVisitante;
        $resultado->save();
        return redirect()->route("entidades.indexResultado", ['entidad' => $entidad]);
    }

    public function deleteResultado($entidad, resultado $resultado) {

        $resultado->delete();

        return redirect()->route("entidades.indexResultado", ['entidad' => $entidad]);
    }

}
