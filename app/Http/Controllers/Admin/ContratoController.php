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
use Illuminate\Http\Request;


class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratos = Contrato::all();
        $municipios = Municipio::all();
        $estados = Estado::all();
        $estadosGestion = EstadoGestion::all();
        $users = User::all();
        $gruposProyecto = GrupoProyecto::all();
        $tiposProyecto = TipoProyecto::all();

        return view('admin.contratos.index', compact('contratos', 'municipios', 'estados', 'estadosGestion', 'users', 'gruposProyecto', 'tiposProyecto'));
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

        $contrato->estado_admin_id = 3;
        $contrato->estado_id = 1;

        $contrato->save();

        return redirect()->route('contratos.index')->with('success', 'Contrato creado exitosamente.')->with('timeout', 1);
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

        return view('admin.contratos.edit', compact('users','contrato', 'municipios', 'tiposProyecto','gruposProyecto','estadosGestion','estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contrato $contrato)
    {
        $contrato->nombreContrato = $request->input('nombreContrato');

        $contrato -> save();

        $municipios = Municipio::all();
        $estados = Estado::all();
        $tiposProyecto = tipoProyecto::all();
        $estadosGestion = EstadoGestion::all();
        $gruposProyecto = GrupoProyecto::all();
        $users = User::all();

        return view('admin.contratos.edit', compact('users','contrato', 'municipios', 'tiposProyecto','gruposProyecto','estadosGestion','estados'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrato $contrato)
    {
        //
    }
}
