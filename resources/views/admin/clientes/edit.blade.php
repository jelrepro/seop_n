@extends('adminlte::page')

@section('title', 'Mostrar Usuario')

@section('content_header')
<div style="position: relative;">
    <h1><i class="fas fa-solid fa-user"></i> {{ $cliente->nombre }}</h1>
    <a href="{{ route('veredas.show', $cliente->vereda_id) }}" class="btn btn-close" style="position: absolute;">
        <i class="fas fa-times"></i>
    </a>
</div>
@stop
    
@section('content')
<div style="position: relative;">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#general">General</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ubicacion">Ubicacion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#adjuntos">Adjuntos</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="general">
            <form action="{{ route('usuarios.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_usuario_id">Estado</label>
                                <select name="estado_usuario_id" id="estado_usuario_id" class="form-control">
                                    @foreach($estadosUsuario as $estadoUsuario)
                                        <option value="{{ $estadoUsuario->id }}" @if($cliente->estado_usuario_id == $estadoUsuario->id) selected @endif>{{ $estadoUsuario->nombreEstadoUsuario }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tipo_usuario_id">Tipo</label>
                                <select name="tipo_usuario_id" id="tipo_usuario_id" class="form-control">
                                    @foreach($tiposUsuario as $tipoUsuario)
                                        <option value="{{ $tipoUsuario->id }}" @if($cliente->tipo_usuario_id == $tipoUsuario->id) selected @endif>{{ $tipoUsuario->nombreTipoUsuario }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cedula">Cedula</label>
                                <input type="text" name="cedula" id="cedula" class="form-control" value="{{ $cliente->cedula }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fechaNacimiento">Fecha Nacimiento</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="{{ $cliente->fechaNacimiento }}">
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
                    </div>
                    
                    <div class="form-group">
                        <label for="anotaciones">Anotaciones</label>
                        <textarea name="anotaciones" id="anotaciones" class="form-control">{{ $cliente->anotaciones }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="novedad">Novedad</label>
                        <textarea name="novedad" id="novedad" class="form-control">{{ $cliente->novedad }}</textarea>
                    </div>
                    
                    <div class="form-group" hidden>
                        <label for="vereda_id">Vereda</label>
                        <select name="vereda_id" id="vereda_id" class="form-control" readonly>
                            @foreach ($veredas as $vereda)
                                <option value="{{ $vereda->id }}">{{ $vereda->veredas }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group" hidden>
                        <label for="x">X</label>
                        <input type="text" name="x" id="x" class="form-control" value="{{ $cliente->x }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="y">Y</label>
                        <input type="text" name="y" id="y" class="form-control" value="{{ $cliente->y }}">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
        </div>

        <div class="tab-pane fade" id="ubicacion">
            <form action="{{ route('usuarios.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_usuario_id">Estado</label>
                                <select name="estado_usuario_id" id="estado_usuario_id" class="form-control">
                                    @foreach($estadosUsuario as $estadoUsuario)
                                        <option value="{{ $estadoUsuario->id }}" @if($cliente->estado_usuario_id == $estadoUsuario->id) selected @endif>{{ $estadoUsuario->nombreEstadoUsuario }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="tipo_usuario_id">Tipo</label>
                                <select name="tipo_usuario_id" id="tipo_usuario_id" class="form-control">
                                    @foreach($tiposUsuario as $tipoUsuario)
                                        <option value="{{ $tipoUsuario->id }}" @if($cliente->tipo_usuario_id == $tipoUsuario->id) selected @endif>{{ $tipoUsuario->nombreTipoUsuario }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="cedula">Cedula</label>
                                <input type="text" name="cedula" id="cedula" class="form-control" value="{{ $cliente->cedula }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="fechaNacimiento">Fecha Nacimiento</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="{{ $cliente->fechaNacimiento }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $cliente->telefono }}">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-group" hidden>
                        <label for="anotaciones">Anotaciones</label>
                        <textarea name="anotaciones" id="anotaciones" class="form-control">{{ $cliente->anotaciones }}</textarea>
                    </div>

                    <div class="form-group" hidden>
                        <label for="novedad">Novedad</label>
                        <textarea name="novedad" id="novedad" class="form-control">{{ $cliente->novedad }}</textarea>
                    </div>
    
                    <div class="form-group">
                        <label for="vereda_id">Vereda</label>
                        <select name="vereda_id" id="vereda_id" class="form-control" readonly>
                            @foreach ($veredas as $vereda)
                                <option value="{{ $vereda->id }}">{{ $vereda->veredas }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="x">X</label>
                        <input type="text" name="x" id="x" class="form-control" value="{{ $cliente->x }}">
                    </div>

                    <div class="form-group">
                        <label for="y">Y</label>
                        <input type="text" name="y" id="y" class="form-control" value="{{ $cliente->y }}">
                    </div>


                </div>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
        </div>

        <div class="tab-pane fade" id="adjuntos">

        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .btn-close {
            /* position: absolute; */
            top: -10px;
            right: 0;
            margin: 1px;
            background-color: rgb(223,0,37);
            border: none;
        }

        .btn-close:hover {
            background-color: rgb(247,0,0);
        }

        .btn-close i {
            color: #fff;
            font-size: 20px;
        }

        .btn-hover-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
@stop

@section('js')
    <script>
    </script>
@stop