
<form class="form-floating" action="{{route('proyectos.store')}}" method="POST" id="form-proyectos">   

    <div class="form-group">
        <label for="proyectos">Nombre del proyecto</label>
        <input type="text" name="proyectos" id="proyectos" class="form-control">
    </div>

    <div class="form-group">
        <label for="municipio">Municipio</label>
        <select name="municipio_id" id="municipio_id" class="form-control">
            <option value="">Seleccione</option>
            @foreach($municipios as $municipio)
                <option value="{{ $municipio->id }}">{{ $municipio->descripcion }}</option>
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
            <option value="">Seleccione</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->id }}">{{ $estado->nombreEstado }}</option>
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
            <option value="">Seleccione</option>
            @foreach($estadosGestion as $estadoGestion)
                <option value="{{ $estadoGestion->id }}">{{ $estadoGestion->nombreEstadoGestion }}</option>
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
            <option value="">Seleccione</option>
            @foreach($gruposProyecto as $grupoProyecto)
                <option value="{{ $grupoProyecto->id }}">{{ $grupoProyecto->nombreGrupoProyecto }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tipo_proyecto_id">Tipo de proyecto</label>
        <select name="tipo_proyecto_id" id="tipo_proyecto_id" class="form-control">
            <option value="">Seleccione</option>
            @foreach($tiposProyecto as $tipoProyecto)
                <option value="{{ $tipoProyecto->id }}">{{ $tipoProyecto->nombreTipoProyecto }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear proyecto</button>

