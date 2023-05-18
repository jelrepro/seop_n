@extends('adminlte::page')

@section('title', 'Mostrar Usuarios')
    
@section('content_header')

@stop
    
@section('content')

    <form action="{{ route('usuarios.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cliente->nombre }}">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for=""></label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for=""></label>
                    </div>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>

    </form>

    <!-- <p>{{ $cliente }}</p> -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        
    </style>
@stop

@section('js')
    <script>
    </script>
@stop