@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

@stop
    
@section('content')
<div class="container-fluid">
    <div class="row d-flex flex-nowrap overflow-auto" style="height: 90vh; with:20hv;">
        <div class="col-sm-5 d-flex flex-nowrap overflow-auto">
            <table class="table table-striped">
                <tr>
                    <!-- <th>id</th> -->
                    <th>Vereda</th>
                </tr>
                @foreach($veredas as $vereda)
                <tr>
                    <!-- <td>{{ $vereda->id }}</td> -->
                    <td>{{ $vereda->veredas }}</td>
                    <td>
                        <span class="text-success text-bold">1</span>
                    </td>
                    <td>
                        <span class="text-warning text-bold">1</span>
                    </td>
                    <td>
                        <span class="text-danger text-bold">1</span>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
    <!-- <table>
        <tr>
            <td>Nombre</td>
            <td>Nombre</td>
            <td>Nombre</td>
            <td>Nombre</td>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->vereda->veredas }}</td>
                <td>{{ $cliente->tipoUsuario->nombreTipoUsuario }}</td>
                <td>{{ $cliente->estadoUsuario->nombreEstadoUsuario }}</td>
            </tr>
        @endforeach
    </table> -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    </script>
@stop