@extends('adminlte::page')

@section('title', 'Editar Obras')

@section('content_header')
  
<h4>{{ $contrato->nombreContrato }}</h4>

<div style="position: relative;">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#general">General</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ficha">Ficha</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#contacto">Contacto</a>
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
                    <div class="form-group">
                        <label for="nombreContrato">Contrato</label>
                        <input type="text" name="nombreContrato" id="nombreContrato" class="form-control" value="{{ $contrato->nombreContrato }}">
                    </div>

                    </div>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
        </div>

        <div class="tab-pane fade" id="anotaciones">

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