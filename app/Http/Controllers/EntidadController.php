<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\entidade;
use App\Models\partido;
use App\Models\resultado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntidadController extends Controller {

    public function indexEquipo($entidad) {
        $entidades = entidade::all();
        $equipos = equipo::all();
        return view("Entidad.indexEquipo", ['entidad' => $entidad], compact('equipos','entidades'));
    }

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
        $equipos = equipo::all();
        $partidos = partido::
        join('equipos as equipoLocal', 'equipoLocal.id', '=', 'local_id')
        ->join('equipos as equipoVisitante', 'equipoVisitante.id', '=', 'visitante_id')
        ->select('partidos.id as id', 'partidos.Fecha as fecha', 'partidos.Hora as hora', 'partidos.Estado as estado', 'equipoLocal.Nombre_equipo as nombreEquipoLocal', 'equipoVisitante.Nombre_equipo as nombreEquipoVisitante', 'partidos.resultado_id as resultado_id', 'equipoLocal.entidad_id', 'equipoVisitante.entidad_id')
                ->where('equipoLocal.entidad_id', '=', $entidad)->orWhere('equipoVisitante.entidad_id', '=', $entidad)->get();
        return view("Entidad.createPartido", ['entidad' => $entidad, 'partidos'=>$partidos], compact('equipos'));
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
        $equipos = equipo::all();
        $resultados = resultado::
        join('partidos', 'partidos.resultado_id', '=', 'resultados.id')
                ->join('equipos as equipoLocal', 'equipoLocal.id', '=', 'local_id')
        ->join('equipos as equipoVisitante', 'equipoVisitante.id', '=', 'visitante_id')
        ->select('partidos.id as id', 'partidos.Fecha as fecha', 'partidos.Hora as hora', 'partidos.Estado as estado', 'equipoLocal.Nombre_equipo as nombreEquipoLocal', 'equipoVisitante.Nombre_equipo as nombreEquipoVisitante', 'resultados.Resultado_equipo_local as ResultadoLocal', 'resultados.Resultado_equipo_visitante as ResultadoVisitante', 'equipoLocal.entidad_id', 'equipoVisitante.entidad_id')
                ->where('equipoLocal.entidad_id', '=', $entidad)->orWhere('equipoVisitante.entidad_id', '=', $entidad)->get();
        return view("Entidad.createResultado", ['entidad' => $entidad, 'resultados' =>$resultados], compact('partidos', 'equipos'));
    }

    public function createResultado(Request $request, $entidad, partido $partido) {
        $partido = partido::find($partido->local_id = $request->equipoLocal);

        $resultado = new resultado();
        $resultado->Resultado_equipo_local = $request->nuevoResultadoLocal;
        $resultado->Resultado_equipo_visitante = $request->nuevoResultadoVisitante;
        $resultado->save();
        $partido->resultado()->associate($resultado)->save();
       
        
        
        

        return redirect()->route("entidades.indexResultado", ['entidad' => $entidad]);
    }

    public function editResultado($entidad, resultado $resultado) {
        $partidos = partido::all();
        return view("Entidad.editResultado", ['entidad' => $entidad], compact('resultado', 'partidos'));
    }

    public function updateResultado($entidad, resultado $resultado, Request $request, partido $partido) {
        
        $resultado->Resultado_equipo_local = $request->nuevoResultadoLocal;
        $resultado->Resultado_equipo_visitante = $request->nuevoResultadoVisitante;
        $partido->resultado()->save($resultado);
        return redirect()->route("entidades.indexResultado", ['entidad' => $entidad]);
    }

    public function deleteResultado($entidad, resultado $resultado) {

        $resultado->delete();

        return redirect()->route("entidades.indexResultado", ['entidad' => $entidad]);
    }

}
