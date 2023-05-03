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
            @foreach($municipios as $municipio)
                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="costoProyecto">Costo del proyecto</label>
        <input type="number" name="costoProyecto" id="costoProyecto" class="form-control">
    </div>

    <div class="form-group">
        <label for="estado_id">Estado</label>
        <select name="estado_id" id="estado_id" class="form-control">
            @foreach($estados as $estado)
                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="cliente">Cliente</label>
        <input type="text" name="cliente" id="cliente" class="form-control">
    </div>

    <div class="form-group">
        <label for="supervisor">Supervisor</label>
        <input type="text" name="supervisor" id="supervisor" class="form-control">
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" class="form-control">
    </div>

    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" class="form-control">
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="estado_gestion_id">Estado de gestión</label>
        <select name="estado_gestion_id" id="estado_gestion_id" class="form-control">
            @foreach($estadosGestion as $estadoGestion)
                <option value="{{ $estadoGestion->id }}">{{ $estadoGestion->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="objeto">Objeto</label>
        <textarea name="objeto" id="objeto" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="alcance">Alcance</label>
        <textarea name="alcance" id="alcance" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="anio">Año</label>
        <input type="text" name="anio" id="anio" class="form-control">
    </div>

    <div class="form-group">
        <label for="responsable">Responsable</label>
        <input type="text" name="responsable" id="responsable" class="form-control">
    </div>

    <div class="form-group">
        <label for="centro_costos">Centro de costos</label>
        <input type="text" name="centro_costos" id="centro_costos" class="form-control">
    </div>

    <div class="form-group">
        <label for="orden_interna">Orden interna</label>
        <input type="text" name="orden_interna" id="orden_interna" class="form-control">
    </div>

    <div class="form-group">
        <label for="cod_inva">Código INVA</label>
        <input type="number" name="cod_inva" id="cod_inva" class="form-control">
    </div>

    <div class="form-group">
        <label for="grupo_proyecto_id">Grupo de proyecto</label>
        <select name="grupo_proyecto_id" id="grupo_proyecto_id" class="form-control">
            @foreach($gruposProyecto as $grupoProyecto)
                <option value="{{ $grupoProyecto->id }}">{{ $grupoProyecto->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tipo_proyecto_id">Tipo de proyecto</label>
        <select name="tipo_proyecto_id" id="tipo_proyecto_id" class="form-control">
            @foreach($tiposProyecto as $tipoProyecto)
                <option value="{{ $tipoProyecto->id }}">{{ $tipoProyecto->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Editar proyecto</button>
</form>