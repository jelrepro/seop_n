@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="proyectos">Nombre del proyecto</label>
        <input type="text" name="proyectos" id="proyectos" class="form-control" value="{{ $proyecto->proyectos }}">
    </div>

    <div class="form-group">
        <label for="municipio_id">Municipio</label>
        <select name="municipio_id" id="municipio_id" class="form-control">
            <option value="{{ $proyecto->municipio->id }}">{{ $proyecto->municipio->descripcion }}</option>
            @foreach($municipios as $municipio)
                <option value="{{ $municipio->id }}">{{ $municipio->descripcion }}</option>
            @endforeach
       </select>
    </div>

    <div class="form-group">
        <label for="costoProyecto">Costo del proyecto</label>
        <input type="number" name="costoProyecto" id="costoProyecto" class="form-control" value="{{ $proyecto->costoProyecto }}">
    </div>

    <div class="form-group">
        <label for="estado_id">Estado</label>
        <select name="estado_id" id="estado_id" class="form-control">
            @foreach($estados as $estado)
                <option value="{{ $estado->id }}" @if($proyecto->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="cliente">Cliente</label>
        <input type="text" name="cliente" id="cliente" class="form-control" value="{{ $proyecto->cliente }}">
    </div>

    <div class="form-group">
        <label for="supervisor">Supervisor</label>
        <input type="text" name="supervisor" id="supervisor" class="form-control" value="{{ $proyecto->supervisor }}">
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $proyecto->telefono }}">
    </div>

    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" class="form-control" value="{{ $proyecto->correo }}">
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control">{{ $proyecto->descripcion }}</textarea>
    </div>

    <div class="form-group">
        <label for="estado_gestion_id">Estado de gestión</label>
        <select name="estado_gestion_id" id="estado_gestion_id" class="form-control">
            @foreach($estadosGestion as $estadoGestion)
                <option value="{{ $estadoGestion->id }}" @if($proyecto->estado_gestion_id == $estadoGestion->id) selected @endif>{{ $estadoGestion->nombreEstadoGestion }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="objeto">Objeto</label>
        <textarea name="objeto" id="objeto" class="form-control">{{ $proyecto->objeto }}</textarea>
    </div>

    <div class="form-group">
        <label for="alcance">Alcance</label>
        <textarea name="alcance" id="alcance" class="form-control">{{ $proyecto->alcance }}</textarea>
    </div>

    <div class="form-group">
        <label for="anio">Año</label>
        <input type="text" name="anio" id="anio" class="form-control" value="{{ $proyecto->anio }}">
    </div>

    <div class="form-group">
        <label for="responsable">Responsable</label>
        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $proyecto->responsable }}">
    </div>

    <div class="form-group">
        <label for="centro_costos">Centro de costos</label>
        <input type="text" name="centro_costos" id="centro_costos" class="form-control" value="{{ $proyecto->centro_costos }}">
    </div>

    <div class="form-group">
        <label for="orden_interna">Orden interna</label>
        <input type="text" name="orden_interna" id="orden_interna" class="form-control" value="{{ $proyecto->orden_interna }}">
    </div>

    <div class="form-group">
        <label for="cod_inva">Código INVA</label>
        <input type="number" name="cod_inva" id="cod_inva" class="form-control" value="{{ $proyecto->cod_inva }}">
    </div>

    <div class="form-group">
        <label for="grupo_proyecto_id">Grupo de proyecto</label>
        <select name="grupo_proyecto_id" id="grupo_proyecto_id" class="form-control">
            @foreach($gruposProyecto as $grupoProyecto)
                <option value="{{ $grupoProyecto->id }}">{{ $grupoProyecto->nombreGrupoProyecto }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tipo_proyecto_id">Tipo de proyecto</label>
        <select name="tipo_proyecto_id" id="tipo_proyecto_id" class="form-control">
            @foreach($tiposProyecto as $tipoProyecto)
                <option value="{{ $tipoProyecto->id }}">{{ $tipoProyecto->nombreTipoProyecto }}</option>
            @endforeach
        </select>
    </div>
    <a href="{{ route('proyectos.index', $proyecto) }}" class="btn btn-primary" title="Volver"><i class="fa-solid fa-rotate-left"></i> Volver</a>

    <button type="submit" class="btn btn-primary">Editar proyecto</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script>
        
    </script>
@stop