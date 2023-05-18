<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Vereda;
use Illuminate\Http\Request;

class ClienteControler extends Controller
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

        $cliente->vereda_id = 1;
        $cliente->tipo_usuario_id = 1;
        $cliente->estado_usuario_id = 0;

        $cliente->save();

        return redirect()->route('veredas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show ($id)
    {
        $cliente = Cliente::find($id);

        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->nombre = $request->input('nombre');
        
        dd($cliente);
        $cliente->save();

        return redirect()->route('usuarios.edit', ['usuario' => $cliente->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
