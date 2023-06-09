<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Proyecto;
use App\Models\Municipio;
use App\Models\EstadoGestion;
use App\Models\Estado;
use App\Models\GrupoProyecto;
use App\Models\TipoProyecto;
use App\Models\User;
// use App\Models\Convenio;

class ProyectoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth.admin')->except(['index', 'show']);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $proyectos = Proyecto::all();
        $proyectos = Proyecto::with('grupoProyecto')->get();

        $totalCostoP = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 3) {
                $totalCostoP += $proyecto->costoProyecto;
            }
        }

        $totalCostoD = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 4){
                $totalCostoD += $proyecto->costoProyecto;
            }
        }

        $totalCostoC = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 0) {
                $totalCostoC += $proyecto->costoProyecto;
            }
        }

        $totalCostoS = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 1) {
                $totalCostoS += $proyecto->costoProyecto;
            }
        }

        $totalCostoE = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 2) {
                $totalCostoE += $proyecto->costoProyecto;
            }
        }

        $estadosGestion = [0,1,2,3,4]; // Arreglo con los estados de gestión que deseas sumar
        $totalCostoPD = Proyecto::whereIn('estado_gestion_id', $estadosGestion)->sum('costoProyecto');
        
        $contadorFactibilidad = Proyecto::where('estado_gestion_id', 3)->count();
        $contadorInicio = Proyecto::where('estado_gestion_id', 4)->count();
        $contadorPlaneacion = Proyecto::where('estado_gestion_id', 0)->count();
        $contadorEjecucion = Proyecto::where('estado_gestion_id', 1)->count();
        /* $contadorPruebas = Proyecto::where('estado_gestion_id', 3)->count(); */
        $contadorCierre = Proyecto::where('estado_gestion_id', 2)->count();

        $estadosGestion = [0,1,2,3,4]; // Arreglo con los estados de gestión que deseas contar
        $contadorPD = Proyecto::whereIn('estado_gestion_id', $estadosGestion)->count();

        $municipios = Municipio::all();
        $estados = Estado::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $tiposProyecto = TipoProyecto::all();
        $users = User::all();

        return view('admin.proyectos.index', compact('users','tiposProyecto','gruposProyecto','estadosGestion','estados','proyectos', 'totalCostoP', 'totalCostoD','totalCostoC','totalCostoS','totalCostoE','contadorFactibilidad','contadorInicio','contadorPlaneacion','contadorEjecucion','contadorCierre','totalCostoPD','contadorPD', 'municipios'));
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

        // $proyecto->municipio_id = $request->input('municipio_id');
        $proyecto->municipio_id = 1;
        // $proyecto->estado_id = $request->input('estado_id');
        $proyecto->estado_id = 1;
        // $proyecto->estado_gestion_id = $request->input('estado_gestion_id');
        $proyecto->estado_gestion_id = 0;
        // $proyecto->anio = $request->input('anio');
        $proyecto->anio = date('Y');
        $proyecto->inicio = Carbon::now();
        $proyecto->fin = Carbon::now();
        // $proyecto->responsable = $request->input('responsable');
        // $proyecto->grupo_proyecto_id = $request->input('grupo_proyecto_id');
        $proyecto->grupo_proyecto_id = 1;
        // $proyecto->tipo_proyecto_id = $request->input('tipo_proyecto_id');
        $proyecto->tipo_proyecto_id = 1;
        $proyecto->responsable_user_id = 1;
        $proyecto->save();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.')->with('timeout', 1);
    }


    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
       

        return view('admin.proyectos.show',compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        $municipios = Municipio::all();
        $estados = Estado::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $tiposProyecto = TipoProyecto::all();
        $users = User::all();

        return view('admin.proyectos.edit', compact('users','proyecto', 'municipios', 'tiposProyecto','gruposProyecto','estadosGestion','estados'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function updatei(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());

          // Obtener los datos necesarios para la vista edit
        $municipios = Municipio::all();
        $estados = Estado::all();
        $tiposProyecto = tipoProyecto::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();

        return view('admin.proyectos.edit', [
            'proyecto' => $proyecto,
            'municipios' => $municipios,
            'estados' => $estados,
            'estadosGestion' => $estadosGestion,
            'tiposProyecto' => $tiposProyecto,
            'gruposProyecto' => $gruposProyecto
        ]);
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->proyectos = $request->input('proyectos');
        $proyecto->municipio_id = $request->input('municipio_id');
        $proyecto->costoProyecto = $request->input('costoProyecto');
        $proyecto->estado_id = $request->input('estado_id');
        $proyecto->estado_gestion_id = $request->input('estado_gestion_id');
        $proyecto->anio = $request->input('anio');
        $proyecto->inicio = $request->input('inicio');
        $proyecto->fin = $request->input('fin');
        // $proyecto->responsable = $request->input('responsable');
        $proyecto->centro_costos = $request->input('centro_costos');
        $proyecto->orden_interna = $request->input('orden_interna');
        $proyecto->cod_inva = $request->input('cod_inva');

        $proyecto->cliente = $request->input('cliente');
        $proyecto->supervisor = $request->input('supervisor');
        $proyecto->telefono = $request->input('telefono');
        $proyecto->correo = $request->input('correo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->objeto = $request->input('objeto');
        $proyecto->alcance = $request->input('alcance');
        $proyecto->antecedente = $request->input('antecedente');
        $proyecto->beneficio = $request->input('beneficio');
        $proyecto->grupo_proyecto_id = $request->input('grupo_proyecto_id');
        $proyecto->tipo_proyecto_id = $request->input('tipo_proyecto_id');
        $proyecto->responsable_user_id = $request->input('responsable_user_id');

        $proyecto->save();
          // Obtener los datos necesarios para la vista edit
        $municipios = Municipio::all();
        $estados = Estado::all();
        $tiposProyecto = tipoProyecto::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $users = User::all();

        return view('admin.proyectos.edit', [
            'proyecto' => $proyecto,
            'municipios' => $municipios,
            'estados' => $estados,
            'estadosGestion' => $estadosGestion,
            'tiposProyecto' => $tiposProyecto,
            'gruposProyecto' => $gruposProyecto,
            'users' => $users,
        ]);
    }

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index')->with('danger', 'Proyecto eliminado exitosamente.')->with('timeout', 1);

    }
}
