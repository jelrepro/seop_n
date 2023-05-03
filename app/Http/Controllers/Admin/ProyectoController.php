<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Municipio;
use App\Models\EstadoGestion;
use App\Models\Estado;
use App\Models\GrupoProyecto;
use App\Models\TipoProyecto;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();

        $totalCostoP = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 0) {
                $totalCostoP += $proyecto->costoProyecto;
            }
        }

        $totalCostoD = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 1) {
                $totalCostoD += $proyecto->costoProyecto;
            }
        }

        $totalCostoC = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 2) {
                $totalCostoC += $proyecto->costoProyecto;
            }
        }

        $totalCostoS = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 3) {
                $totalCostoS += $proyecto->costoProyecto;
            }
        }

        $totalCostoE = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 4) {
                $totalCostoE += $proyecto->costoProyecto;
            }
        }

        $estadosGestion = [0, 1]; // Arreglo con los estados de gestión que deseas sumar
        $totalCostoPD = Proyecto::whereIn('estado_gestion_id', $estadosGestion)->sum('costoProyecto');
        
        
        $contadorInicio = Proyecto::where('estado_gestion_id', 0)->count();
        $contadorPlaneacion = Proyecto::where('estado_gestion_id', 1)->count();
        $contadorEjecucion = Proyecto::where('estado_gestion_id', 2)->count();
        /* $contadorPruebas = Proyecto::where('estado_gestion_id', 3)->count(); */
        $contadorCierre = Proyecto::where('estado_gestion_id', 4)->count();

        $estadosGestion = [0, 1]; // Arreglo con los estados de gestión que deseas contar
        $contadorPD = Proyecto::whereIn('estado_gestion_id', $estadosGestion)->count();

        $municipios = Municipio::all();
        $estados = Estado::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $tiposProyecto = TipoProyecto::all();

        return view('admin.proyectos.index', compact('tiposProyecto','gruposProyecto','estadosGestion','estados','proyectos', 'totalCostoP', 'totalCostoD','totalCostoC','totalCostoS','totalCostoE','contadorInicio','contadorPlaneacion','contadorEjecucion','contadorCierre','totalCostoPD','contadorPD', 'municipios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       /*  $municipios = Municipio::all();
        $estados = Estado::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $tiposProyecto = TipoProyecto::all();
        return view('admin.proyectos.create', compact('estados', 'tiposProyecto','grupoProyecto','estadosGestion', 'municipios')); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto;

        $proyecto->proyectos = $request->input('proyectos');
        $proyecto->municipio_id = $request->input('municipio_id');
        $proyecto->costoProyecto = $request->input('costoProyecto');
        $proyecto->estado_id = $request->input('estado_id');
        $proyecto->cliente = $request->input('cliente');
        $proyecto->supervisor = $request->input('supervisor');
        $proyecto->telefono = $request->input('telefono');
        $proyecto->correo = $request->input('correo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->estado_gestion_id = $request->input('estado_gestion_id');
        $proyecto->objeto = $request->input('objeto');
        $proyecto->alcance = $request->input('alcance');
        $proyecto->anio = $request->input('anio');
        $proyecto->responsable = $request->input('responsable');
        $proyecto->centro_costos = $request->input('centro_costos');
        $proyecto->orden_interna = $request->input('orden_interna');
        $proyecto->cod_inva = $request->input('cod_inva');
        $proyecto->grupo_proyecto_id = $request->input('grupo_proyecto_id');
        $proyecto->tipo_proyecto_id = $request->input('tipo_proyecto_id');

        $proyecto->save();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        $proyecto = Proyecto::find($id);

        return view('admin.proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
