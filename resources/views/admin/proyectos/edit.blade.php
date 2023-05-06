@extends('adminlte::page')

@section('title', 'Editar Obras')

@section('content_header')
  
<h4>{{ $proyecto->cod_inva }}</h4>

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
                    <div class="form-group" hidden>
                        <label for="proyectos">Obra</label>
                        <input type="text" name="proyectos" id="proyectos" class="form-control" value="{{ $proyecto->proyectos }}">
                    </div>
                    <div class="form-group">
                        <label for="grupo_proyecto_id">Obra</label>
                        <select name="grupo_proyecto_id" id="grupo_proyecto_id" class="form-control">
                            <option value="{{ $proyecto->grupoProyecto->id }}">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</option>
                            @foreach($gruposProyecto as $grupoProyecto)
                                <option value="{{ $grupoProyecto->id }}">{{ $grupoProyecto->nombreGrupoProyecto }}</option>
                            @endforeach
                        </select>
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
                                <label for="inicio">Inicio</label>
                                <input type="date" name="inicio" id="inicio" class="form-control" value="{{ $proyecto->inicio }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fin">Fin</label>
                                <input type="date" name="fin" id="fin" class="form-control" value="{{ $proyecto->fin }}">
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
                                <input type="text" name="cod_inva" id="cod_inva" class="form-control" value="{{ $proyecto->cod_inva }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="anio">Año</label>
                                <input type="text" name="anio" id="anio" class="form-control" value="{{ $proyecto->anio }}">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $proyecto->responsable }}">
                    </div> -->
                    <div class="form-group">
                        <label for="responsable_user_id">Responsable</label>
                        <select name="responsable_user_id" id="responsable_user_id" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @if($proyecto->responsable_user_id == $user->id) selected @endif>{{ $user->name }}</option>
                            @endforeach
                        </select>
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
                <div>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>

            </form>
            <form method="POST" action="{{ route('proyectos.destroy', $proyecto->id) }}" id="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-white btn-hover-danger" value="{{ $proyecto->id }}" onclick="return confirm('¿Está seguro de que desea eliminar este proyecto?')">Eliminar</button>
            </form>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
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
                                <input type="text" name="cod_inva" id="cod_inva" class="form-control" value="{{ $proyecto->cod_inva }}">
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
                        <label for="responsable_user_id">Responsable</label>
                        <select name="responsable_user_id" id="responsable_user_id" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @if($proyecto->responsable_user_id == $user->id) selected @endif>{{ $user->name }}</option>
                            @endforeach
                        </select>
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
                            <div class="form-group" hidden>
                                <label for="responsable_user_id">Responsable</label>
                                <select name="responsable_user_id" id="responsable_user_id" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" @if($proyecto->responsable_user_id == $user->id) selected @endif>{{ $user->name }}</option>
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