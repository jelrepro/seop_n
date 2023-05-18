<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Vereda;
use App\Models\TipoUsuario;
use App\Models\EstadoUsuario;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $cliente = new Cliente;

        // $cliente->vereda_id = 1;
        $cliente->vereda_id = $request->input('vereda_id');
        $cliente->tipo_usuario_id = 1;
        $cliente->estado_usuario_id = 0;

        $cliente->save();

        return redirect()->route('veredas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        $veredas = Vereda::all();
        $tiposUsuario = TipoUsuario::all();
        $estadosUsuario = EstadoUsuario::all();

        return view('admin.clientes.edit', compact('cliente', 'veredas', 'tiposUsuario', 'estadosUsuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->input('nombre');
        $cliente->cedula = $request->input('cedula');
        $cliente->telefono = $request->input('telefono');
        $cliente->vereda_id = $request->input('vereda_id');
        $cliente->tipo_usuario_id = $request->input('tipo_usuario_id');
        $cliente->estado_usuario_id = $request->input('estado_usuario_id');
        $cliente->anotaciones = $request->input('anotaciones');
        $cliente->novedad = $request->input('novedad');
        $cliente->codSello = $request->input('codSello');
        $cliente->codMedidor = $request->input('codMedidor');
        
        // dd($cliente);
        $cliente->save();

        return redirect()->route('usuarios.edit', ['usuario' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
