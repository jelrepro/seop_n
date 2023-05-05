@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  
<h1>{{ $proyecto->proyectos }}</h1>

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
    <a href="{{ route('proyectos.index', $proyecto) }}" class="btn btn-close" style="position: absolute;">
        <i class="fas fa-times"></i>
    </a>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="general">
            <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="form-group">
                        <label for="proyectos">Obra</label>
                        <input type="text" name="proyectos" id="proyectos" class="form-control" value="{{ $proyecto->proyectos }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_gestion_id">Etapa</label>
                                <select name="estado_gestion_id" id="estado_gestion_id" class="form-control">
                                    @foreach($estadosGestion as $estadoGestion)
                                        <option value="{{ $estadoGestion->id }}" @if($proyecto->estado_gestion_id == $estadoGestion->id) selected @endif>{{ $estadoGestion->nombreEstadoGestion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_id">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-control">
                                    @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($proyecto->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cliente">Inicio</label>
                                <input type="date" name="cliente" id="cliente" class="form-control" value="{{ $proyecto->inicio }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cliente">Fin</label>
                                <input type="date" name="cliente" id="cliente" class="form-control" value="{{ $proyecto->fin }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="costoProyecto">Costo del proyecto</label>
                                <input type="number" name="costoProyecto" id="costoProyecto" class="form-control" value="{{ $proyecto->costoProyecto }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                <select name="municipio_id" id="municipio_id" class="form-control">
                                    <option value="{{ $proyecto->municipio->id }}">{{ $proyecto->municipio->descripcion }}</option>
                                    @foreach($municipios as $municipio)
                                        <option value="{{ $municipio->id }}">{{ $municipio->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="orden_interna">Orden interna</label>
                                <input type="text" name="orden_interna" id="orden_interna" class="form-control" value="{{ $proyecto->orden_interna }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="centro_costos">Centro de costos</label>
                                <input type="text" name="centro_costos" id="centro_costos" class="form-control" value="{{ $proyecto->centro_costos }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_inva">Código INVA</label>
                                <input type="number" name="cod_inva" id="cod_inva" class="form-control" value="{{ $proyecto->cod_inva }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="anio">Año</label>
                                <input type="text" name="anio" id="anio" class="form-control" value="{{ $proyecto->anio }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $proyecto->responsable }}">
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div> -->
                    <div>
                        <div class="form-group" hidden>
                            <label for="cliente">Cliente</label>
                            <input type="text" name="cliente" id="cliente" class="form-control" value="{{ $proyecto->cliente }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="supervisor">Supervisor</label>
                            <input type="text" name="supervisor" id="supervisor" class="form-control" value="{{ $proyecto->supervisor }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $proyecto->telefono }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" value="{{ $proyecto->correo }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control">{{ $proyecto->descripcion }}</textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="objeto">Objeto</label>
                            <textarea name="objeto" id="objeto" class="form-control">{{ $proyecto->objeto }}</textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="antecente">Antecedentes</label>
                            <textarea name="antecente" id="antecente" class="form-control"></textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="alcance">Alcance</label>
                            <textarea name="alcance" id="alcance" class="form-control">{{ $proyecto->alcance }}</textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="beneficio">Beneficios</label>
                            <textarea name="beneficio" id="beneficio" class="form-control"></textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="grupo_proyecto_id">Grupo de proyecto</label>
                            <select name="grupo_proyecto_id" id="grupo_proyecto_id" class="form-control">
                                <option value="{{ $proyecto->grupoProyecto->id }}">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</option>
                                @foreach($gruposProyecto as $grupoProyecto)
                                    <option value="{{ $grupoProyecto->id }}">{{ $grupoProyecto->nombreGrupoProyecto }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" hidden>
                            <label for="tipo_proyecto_id">Tipo de proyecto</label>
                            <select name="tipo_proyecto_id" id="tipo_proyecto_id" class="form-control">
                                <option value="{{ $proyecto->tipoProyecto->id }}">{{ $proyecto->tipoProyecto->nombreTipoProyecto }}</option>
                                @foreach($tiposProyecto as $tipoProyecto)
                                    <option value="{{ $tipoProyecto->id }}">{{ $tipoProyecto->nombreTipoProyecto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- <a href="{{ route('proyectos.index', $proyecto) }}" class="btn btn-primary" title="Volver"><i class="fa-solid fa-rotate-left"></i> Volver</a> -->

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
        </div>
        <div class="tab-pane fade" id="ficha">
            <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="form-group" hidden>
                        <label for="proyectos">Obra</label>
                        <input type="text" name="proyectos" id="proyectos" class="form-control" value="{{ $proyecto->proyectos }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_gestion_id">Etapa</label>
                                <select name="estado_gestion_id" id="estado_gestion_id" class="form-control">
                                    @foreach($estadosGestion as $estadoGestion)
                                        <option value="{{ $estadoGestion->id }}" @if($proyecto->estado_gestion_id == $estadoGestion->id) selected @endif>{{ $estadoGestion->nombreEstadoGestion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_id">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-control">
                                    @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($proyecto->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="cliente">Inicio</label>
                                <input type="date" name="cliente" id="cliente" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="cliente">Fin</label>
                                <input type="date" name="cliente" id="cliente" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="costoProyecto">Costo del proyecto</label>
                                <input type="number" name="costoProyecto" id="costoProyecto" class="form-control" value="{{ $proyecto->costoProyecto }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="municipio">Municipio</label>
                                <select name="municipio_id" id="municipio_id" class="form-control">
                                    <option value="{{ $proyecto->municipio->id }}">{{ $proyecto->municipio->descripcion }}</option>
                                    @foreach($municipios as $municipio)
                                        <option value="{{ $municipio->id }}">{{ $municipio->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group"hidden>
                                <label for="orden_interna">Orden interna</label>
                                <input type="text" name="orden_interna" id="orden_interna" class="form-control" value="{{ $proyecto->orden_interna }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="centro_costos">Centro de costos</label>
                                <input type="text" name="centro_costos" id="centro_costos" class="form-control" value="{{ $proyecto->centro_costos }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="cod_inva">Código INVA</label>
                                <input type="number" name="cod_inva" id="cod_inva" class="form-control" value="{{ $proyecto->cod_inva }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="anio">Año</label>
                                <input type="text" name="anio" id="anio" class="form-control" value="{{ $proyecto->anio }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $proyecto->responsable }}">
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div> -->
                    <div>
                        <div class="form-group" hidden>
                            <label for="cliente">Cliente</label>
                            <input type="text" name="cliente" id="cliente" class="form-control" value="{{ $proyecto->cliente }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="supervisor">Supervisor</label>
                            <input type="text" name="supervisor" id="supervisor" class="form-control" value="{{ $proyecto->supervisor }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $proyecto->telefono }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" value="{{ $proyecto->correo }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control">{{ $proyecto->descripcion }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="objeto">Objeto</label>
                            <textarea name="objeto" id="objeto" class="form-control">{{ $proyecto->objeto }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="antecedente">Antecedentes</label>
                            <textarea name="antecedente" id="antecedente" class="form-control">{{ $proyecto->antecedente }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="alcance">Alcance</label>
                            <textarea name="alcance" id="alcance" class="form-control">{{ $proyecto->alcance }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="beneficio">Beneficios</label>
                            <textarea name="beneficio" id="beneficio" class="form-control">{{ $proyecto->beneficio }}</textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="grupo_proyecto_id">Grupo de proyecto</label>
                            <select name="grupo_proyecto_id" id="grupo_proyecto_id" class="form-control">
                                <option value="{{ $proyecto->grupoProyecto->id }}">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</option>
                                @foreach($gruposProyecto as $grupoProyecto)
                                    <option value="{{ $grupoProyecto->id }}">{{ $grupoProyecto->nombreGrupoProyecto }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" hidden>
                            <label for="tipo_proyecto_id">Tipo de proyecto</label>
                            <select name="tipo_proyecto_id" id="tipo_proyecto_id" class="form-control">
                                <option value="{{ $proyecto->tipoProyecto->id }}">{{ $proyecto->tipoProyecto->nombreTipoProyecto }}</option>
                                @foreach($tiposProyecto as $tipoProyecto)
                                    <option value="{{ $tipoProyecto->id }}">{{ $tipoProyecto->nombreTipoProyecto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- <a href="{{ route('proyectos.index', $proyecto) }}" class="btn btn-primary" title="Volver"><i class="fa-solid fa-rotate-left"></i> Volver</a> -->

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
        </div>
        <div class="tab-pane fade" id="contacto">
            <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="form-group" hidden>
                        <label for="proyectos">Obra</label>
                        <input type="text" name="proyectos" id="proyectos" class="form-control" value="{{ $proyecto->proyectos }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_gestion_id">Etapa</label>
                                <select name="estado_gestion_id" id="estado_gestion_id" class="form-control">
                                    @foreach($estadosGestion as $estadoGestion)
                                        <option value="{{ $estadoGestion->id }}" @if($proyecto->estado_gestion_id == $estadoGestion->id) selected @endif>{{ $estadoGestion->nombreEstadoGestion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_id">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-control">
                                    @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($proyecto->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="cliente">Inicio</label>
                                <input type="date" name="cliente" id="cliente" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="cliente">Fin</label>
                                <input type="date" name="cliente" id="cliente" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="costoProyecto">Costo del proyecto</label>
                                <input type="number" name="costoProyecto" id="costoProyecto" class="form-control" value="{{ $proyecto->costoProyecto }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="municipio">Municipio</label>
                                <select name="municipio_id" id="municipio_id" class="form-control">
                                    <option value="{{ $proyecto->municipio->id }}">{{ $proyecto->municipio->descripcion }}</option>
                                    @foreach($municipios as $municipio)
                                        <option value="{{ $municipio->id }}">{{ $municipio->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group"hidden>
                                <label for="orden_interna">Orden interna</label>
                                <input type="text" name="orden_interna" id="orden_interna" class="form-control" value="{{ $proyecto->orden_interna }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="centro_costos">Centro de costos</label>
                                <input type="text" name="centro_costos" id="centro_costos" class="form-control" value="{{ $proyecto->centro_costos }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="cod_inva">Código INVA</label>
                                <input type="number" name="cod_inva" id="cod_inva" class="form-control" value="{{ $proyecto->cod_inva }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="anio">Año</label>
                                <input type="text" name="anio" id="anio" class="form-control" value="{{ $proyecto->anio }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $proyecto->responsable }}">
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div> -->
                    <div>
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

                        <div class="form-group" hidden>
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control">{{ $proyecto->descripcion }}</textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="objeto">Objeto</label>
                            <textarea name="objeto" id="objeto" class="form-control">{{ $proyecto->objeto }}</textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="antecedente">Antecedentes</label>
                            <textarea name="antecendente" id="antecendente" class="form-control"></textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="alcance">Alcance</label>
                            <textarea name="alcance" id="alcance" class="form-control">{{ $proyecto->alcance }}</textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="beneficio">Beneficios</label>
                            <textarea name="beneficio" id="beneficio" class="form-control"></textarea>
                        </div>

                        <div class="form-group" hidden>
                            <label for="grupo_proyecto_id">Grupo de proyecto</label>
                            <select name="grupo_proyecto_id" id="grupo_proyecto_id" class="form-control">
                                <option value="{{ $proyecto->grupoProyecto->id }}">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</option>
                                @foreach($gruposProyecto as $grupoProyecto)
                                    <option value="{{ $grupoProyecto->id }}">{{ $grupoProyecto->nombreGrupoProyecto }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" hidden>
                            <label for="tipo_proyecto_id">Tipo de proyecto</label>
                            <select name="tipo_proyecto_id" id="tipo_proyecto_id" class="form-control">
                                <option value="{{ $proyecto->tipoProyecto->id }}">{{ $proyecto->tipoProyecto->nombreTipoProyecto }}</option>
                                @foreach($tiposProyecto as $tipoProyecto)
                                    <option value="{{ $tipoProyecto->id }}">{{ $tipoProyecto->nombreTipoProyecto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- <a href="{{ route('proyectos.index', $proyecto) }}" class="btn btn-primary" title="Volver"><i class="fa-solid fa-rotate-left"></i> Volver</a> -->

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

        /* .tabs {
            display: flex;
            justify-content: center;
            align-items: center;
        } */

        /* .tab {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #eee;
            border-radius: 5px 5px 0 0;
            cursor: pointer;
        }

        .tab:hover {
            background-color: #ddd;
        }

        .tab.active {
            background-color: #fff;
            border-bottom: 2px solid #000;
        } */

        /* .tab-content {
            display: none;
            padding: 20px;
            background-color: #fff;
            border-radius: 0 5px 5px 5px;
        } */

        /* .tab-content.hidden {
            display: none;
        } */
    </style>
@stop

@section('js')
    <script>
        function changeTab(tab) {
            // Hide all tab content
            const tabContents = document.getElementsByClassName('tab-content');
            for (let i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.add('hidden');
            }
        
            // Deactivate all tabs
            const tabs = document.getElementsByClassName('tab');
            for (let i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove('active');
            }
        
            // Show selected tab content and activate selected tab
            document.getElementById('content' + tab.substr(3)).classList.remove('hidden');
            document.getElementById(tab).classList.add('active');
        }
    </script>
@stop