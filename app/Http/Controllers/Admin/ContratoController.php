<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contrato;
use App\Models\Municipio;
use App\Models\Estado;
use App\Models\EstadoGestion;
use App\Models\User;
use App\Models\GrupoProyecto;
use App\Models\TipoProyecto;
use App\Models\EstadoAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $contratos = Contrato::all();

        $totalCostoP = 0;

        foreach ($contratos as $contrato) {
            if ($contrato->estado_admin_id == 3) {
                $totalCostoP += $contrato->costoContrato;
            }
        }

        $totalCostoC = 0;

        foreach ($contratos as $contrato) {
            if ($contrato->estado_admin_id == 2) {
                $totalCostoC += $contrato->costoContrato;
            }
        }

        $totalCostoE = 0;

        foreach ($contratos as $contrato) {
            if ($contrato->estado_admin_id == 1){
                $totalCostoE += $contrato->costoContrato;
            }
        }

        $totalCostoL = 0;

        foreach ($contratos as $contrato) {
            if ($contrato->estado_admin_id == 0) {
                $totalCostoL += $contrato->costoContrato;
            }
        }

        $estadosAdmin = [0,1,2,3]; // Arreglo con los estados de gestión que deseas sumar
        $totalCostoContrato = Contrato::whereIn('estado_admin_id', $estadosAdmin)->sum('costoContrato');
        
        
        $municipios = Municipio::all();
        $estados = Estado::all();
        $estadosGestion = EstadoGestion::all();
        $users = User::all();
        $gruposProyecto = GrupoProyecto::all();
        $tiposProyecto = TipoProyecto::all();

        return view('admin.contratos.index', compact('contratos', 'municipios', 'estados', 'estadosGestion', 'users', 'gruposProyecto', 'tiposProyecto', 'totalCostoP', 'totalCostoE','totalCostoC', 'totalCostoL','totalCostoContrato'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contrato = new Contrato;

        $contrato->inicio = Carbon::now();
        $contrato->fin = Carbon::now();

        $contrato->estado_admin_id = 3;
        $contrato->estado_id = 1;
        $contrato->responsable_user_id = 1;

        $contrato->save();

        return redirect()->route('contratos.index')->with('success_contrato', 'Contrato creado exitosamente.')->with('timeout', 1);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contrato $contrato)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contrato $contrato)
    {
        $municipios = Municipio::all();
        $estados = Estado::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $tiposProyecto = TipoProyecto::all();
        $users = User::all();
        $estadosAdmin = EstadoAdmin::all();

        return view('admin.contratos.edit', compact('estadosAdmin','users','contrato', 'municipios', 'tiposProyecto','gruposProyecto','estadosGestion','estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contrato $contrato)
    {
        $contrato->nombreContrato = $request->input('nombreContrato');
        $contrato->estado_id = $request->input('estado_id');
        $contrato->estado_admin_id = $request->input('estado_admin_id');
        $contrato->costoContrato = $request->input('costoContrato');
        $contrato->proyeccion = $request->input('proyeccion');
        $contrato->descripcion = $request->input('descripcion');
        $contrato->objeto = $request->input('objeto');
        $contrato->alcance = $request->input('alcance');

        $contrato->contratista = $request->input('contratista');
        $contrato->nit = $request->input('nit');
        // $contrato->responsable = $request->input('responsable');
        $contrato->telefono = $request->input('telefono');
        $contrato->correo = $request->input('correo');
        $contrato->banco = $request->input('banco');
        $contrato->noCuenta = $request->input('nocuenta');
        $contrato->tipoCuenta = $request->input('tipoCuenta');
        
        $contrato->k = $request->input('k');
        $contrato->a = $request->input('a');
        $contrato->i = $request->input('i');
        $contrato->u = $request->input('u');
        $contrato->anticipo = $request->input('anticipo');
        $contrato->amortizacion = $request->input('amortizacion');
        $contrato->regarantia = $request->input('regarantia');
        $contrato->reteica = $request->input('reteica');
        $contrato->retefuente = $request->input('retefuente');
        $contrato->reteiva = $request->input('reteiva');
        $contrato->ordenCompra = $request->input('ordenCompra');
        $contrato->noSolped = $request->input('noSolped');

        $contrato->inicio = $request->input('inicio');
        $contrato->fin = $request->input('fin');
        $contrato->responsable_user_id = $request->input('responsable_user_id');
        
        $contrato -> save();

        $municipios = Municipio::all();
        $estados = Estado::all();
        $tiposProyecto = tipoProyecto::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $users = User::all();
        $estadosAdmin = EstadoAdmin::all();
        

        return view('admin.contratos.edit', compact('estadosAdmin','users','contrato', 'municipios', 'tiposProyecto','gruposProyecto','estadosGestion','estados'))->with('update', 'Contrato actualizado exitosamente.')->with('timeout', 1);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrato $contrato)
    {
        $contrato ->delete();

        return redirect()->route('contratos.index')->with('danger_contrato', 'Contrato eliminado exitosamente.')->with('timeout', 1);
    }
}
