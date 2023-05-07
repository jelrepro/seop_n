@extends('adminlte::page')

@section('title', 'Editar Contrato')

@section('content_header')
  
<h4>{{ $contrato->nombreContrato }}</h4>

<div style="position: relative;">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#general">General</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#contratista">Contratista</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#variables">Variables</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#anotaciones">Anotaciones</a>
        </li>
    </ul>
    <a href="{{ route('contratos.index', $contrato) }}" class="btn btn-close" style="position: absolute;">
        <i class="fas fa-times"></i>
    </a>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="general">
            <form method="POST" action="{{ route('contratos.update', $contrato->id) }}">
                @csrf
                @method('PUT')
                
                <div class="container">
                    <div class="form-group" hidden>
                        <label for="nombreContrato">Contrato</label>
                        <input type="text" name="nombreContrato" id="nombreContrato" class="form-control" value="{{ $contrato->nombreContrato }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_id">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-control">
                                    @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($contrato->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_admin_id">Etapa</label>
                                <select name="estado_admin_id" id="estado_admin_id" class="form-control">
                                    @foreach($estadosAdmin as $estadoAdmin)
                                        <option value="{{ $estadoAdmin->id }}" @if($contrato->estado_admin_id == $estadoAdmin->id) selected @endif>{{ $estadoAdmin->nombreEstadosAdmin }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inicio">Inicio</label>
                                <input type="date" name="inicio" id="inicio" class="form-control" value="{{ $contrato->inicio }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fin">Fin</label>
                                <input type="date" name="fin" id="fin" class="form-control" value="{{ $contrato->fin }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="costoContrato">Costo</label>
                                <input type="text" name="costoContrato" id="costoContrato" class="form-control" value="{{ $contrato->costoContrato }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="proyeccion">Proyeccion</label>
                                <input type="text" name="proyeccion" id="proyeccion" class="form-control" value="{{ $contrato->proyeccion }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control">{{ $contrato->descripcion }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="objeto">Objeto</label>
                            <textarea name="objeto" id="objeto" class="form-control">{{ $contrato->objeto }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="alcance">Alcance</label>
                            <textarea name="alcance" id="alcance" class="form-control">{{ $contrato->alcance }}</textarea>
                        </div>

                </div>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
            <form method="POST" action="{{ route('contratos.destroy', $contrato->id) }}" id="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-white btn-hover-danger" value="{{ $contrato->id }}" onclick="return confirm('¿Está seguro de que desea eliminar este contrato?')">Eliminar</button>
            </form>
        </div>

        <div class="tab-pane fade" id="contratista">

        </div>
        <div class="tab-pane fade" id="varibles">

        </div>
        <div class="tab-pane fade" id="anotaciones">

        </div>

        @if(session('update'))
            <div class="alert alert-primary">{{ session('update') }}</div>
        @endif
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