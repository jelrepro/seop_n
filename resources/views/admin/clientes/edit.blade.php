@extends('adminlte::page')

@section('title', 'Mostrar Usuarios')
    
@section('content_header')

@stop
    
@section('content')

    <form action="{{ route('usuarios.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cliente->nombre }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="cedula">Cedula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control" value="{{ $cliente->cedula }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $cliente->telefono }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="vereda_id">Vereda</label>
                        <select name="vereda_id" id="vereda_id" class="form-control">
                            @foreach($veredas as $vereda)
                                <option value="{{ $vereda->id }}" @if($cliente->vereda_id == $vereda->id) selected @endif>{{ $vereda->veredas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tipo_usuario_id">Tipo Usuario</label>
                        <select name="tipo_usuario_id" id="tipo_usuario_id" class="form-control">
                            @foreach($tiposUsuario as $tipoUsuario)
                                <option value="{{ $tipoUsuario->id }}" @if($cliente->tipo_usuario_id == $tipoUsuario->id) selected @endif>{{ $tipoUsuario->nombreTipoUsuario }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="estado_usuario_id">Estado Usuario</label>
                        <select name="estado_usuario_id" id="estado_usuario_id" class="form-control">
                            @foreach($estadosUsuario as $estadoUsuario)
                                <option value="{{ $estadoUsuario->id }}" @if($cliente->estado_usuario_id == $estadoUsuario->id) selected @endif>{{ $estadoUsuario->nombreEstadoUsuario }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="anotaciones">Anotaciones</label>
                <input type="text" name="anotaciones" id="anotaciones" class="form-control" value="{{ $cliente->anotaciones }}">
            </div>

            <div class="form-group">
                <label for="novedad">Novedad</label>
                <input type="text" name="novedad" id="novedad" class="form-control" value="{{ $cliente->novedad }}">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="codSello">Codigo Sello</label>
                        <input type="text" name="codSello" id="codSello" class="form-control" value="{{ $cliente->codSello }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="codMedidor">Codigo Medidor</label>
                        <input type="text" name="codMedidor" id="codMedidor" class="form-control" value="{{ $cliente->codMedidor }}">
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