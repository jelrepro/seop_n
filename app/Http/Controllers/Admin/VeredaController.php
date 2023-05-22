<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vereda;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


use PDF;

class VeredaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::with(['vereda', 'tipoUsuario', 'estadoUsuario'])->get();

        $veredas = Vereda::all();

        return view('admin.veredas.index', compact('clientes','veredas'));
    }

    public function imprimir()
    {
        // $clientes = Cliente::with(['vereda', 'tipoUsuario', 'estadoUsuario'])->get();

        // $veredas = Vereda::all();

        // $fecha = date(y-m-d);
        // $data = compact('clientes', 'veredas');
        // $pdf = PDF::loadView('pdf.reporteveredas', $data);

        // return $pdf->stream();
        // return $pdf->download('invoice.pdf');

        return view('admin.proyectos.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vereda $vereda)
    {
        // $vereda = Vereda::findOrFail($vereda);
        $clientes = $vereda->clientes;

        return view('admin.veredas.show', compact('vereda','clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vereda $vereda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vereda $vereda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vereda $vereda)
    {
        //
    }
}
