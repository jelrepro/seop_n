@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

@stop
    
@section('content')
<div class="container-fluid">
    <div class="row d-flex flex-nowrap overflow-auto" style="height: 75vh">
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
                        <span class="text-success text-bold">{{ $vereda->clientes()->where('estado_usuario_id', 0)->count() }}</span>                            
                    </td>
                    <td>
                        <span class="text-warning text-bold">{{ $vereda->clientes()->where('estado_usuario_id', 2)->count() }}</span>    
                    </td>
                    <td>
                        <span class="text-danger text-bold">{{ $vereda->clientes()->where('estado_usuario_id', 3)->count() }}</span>
                    </td>
                    <td>
                        <a href="{{ route('veredas.show', ['vereda' => $vereda->id]) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    </script>
@stop