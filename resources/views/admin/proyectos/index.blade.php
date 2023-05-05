@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    <div class="clearfix">
        <div class="button-group">
            <h1 class="float-left">Proyectos</h1>
            <a href="#" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#nuevoProyectoModal">Nuevo</a>
        </div>
    </div>
    <div class="modal fade" id="nuevoProyectoModal" tabindex="-1" role="dialog" aria-labelledby="nuevoProyectoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nuevoProyectoModalLabel">Crear nuevo proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar el formulario de creación de proyectos -->
                    <form method="POST" action="{{ route('proyectos.store') }}">
                    @csrf
                        @include('admin.proyectos.create')
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-2">
                <h6>FACTIBILIDAD</h6>
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 3)
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="mr-3">
                        <h5 class="card-title mb-1">{{ $proyecto->proyectos }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                        <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                        </div>
                        <div class="ml-auto text-right">
                            <small class="text-muted d-block">
                            <span class="font-medium rounded-lg m-2 p-1" style=" color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                            </span>
                            </small>
                            <small><a href="#" data-toggle="modal" data-target="#editarProyectoModal" data-id="{{ $proyecto->id }}">Editar</a></small>
                            <small class="text-muted d-block">{{ $proyecto->responsable }}</small>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            <div class="modal fade" id="editarProyectoModal" tabindex="-1" role="dialog" aria-labelledby="editarProyectoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarProyectoModalLabel">Editar proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->proyectos }}">
                    </div>
                    <div class="form-group">
                        <label for="subtitulo">Subtítulo</label>
                        <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{ $proyecto->subtitulo }}">
                    </div>
                    <div class="form-group">
                        <label for="costoProyecto">Costo del proyecto</label>
                        <input type="number" class="form-control" id="costoProyecto" name="costoProyecto" value="{{ $proyecto->costoProyecto }}">
                    </div>
                    <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input type="text" class="form-control" id="responsable" name="responsable" value="{{ $proyecto->responsable }}">
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado">
                        @foreach ($estados as $estado)
                            <option value="{{ $estado->id }}" {{ $estado->id == $proyecto->estado_id ? 'selected' : '' }}>{{ $estado->nombreEstado }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estado_gestion">Estado de gestión</label>
                        <select class="form-control" id="estado_gestion" name="estado_gestion">
                        @foreach ($estadosGestion as $estadoGestion)
                            <option value="{{ $estadoGestion->id }}" {{ $estadoGestion->id == $proyecto->estado_gestion_id ? 'selected' : '' }}>{{ $estadoGestion->nombreEstadoGestion }}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

            </div> -->
            <div class="col-sm-3">
                <h6>INICIO</h6>
            <!-- Contenido de la segunda columna -->
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 4)
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="mr-3">
                        <h5 class="card-title mb-1">{{ $proyecto->proyectos }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                        <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                        </div>
                        <div class="ml-auto text-right">
                            <small class="text-muted d-block">
                            <span class="font-medium rounded-lg m-2 p-1" style=" color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                            </span>
                            </small>
                            <!-- <small><a href="#">Mostrar</a></small> -->
                            <small><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></small>
                            <!-- <small><a href="#" data-toggle="modal" data-target="#editarProyectoModal" data-id="{{ $proyecto->id }}">Editar</a></small> -->
                            <small class="text-muted d-block">{{ $proyecto->responsable }}</small>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
            <div class="col-sm-3">
                <h6>PLANEACION</h6>
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 0)
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="mr-3">
                        <h5 class="card-title mb-1">{{ $proyecto->proyectos }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                        <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                        </div>
                        <div class="ml-auto text-right">
                            <small class="text-muted d-block">
                            <span class="font-medium rounded-lg m-2 p-1" style=" color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                            </span>
                            </small>
                            <!-- <small><a href="#">Editar</a></small> -->
                            <small><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></small>
                            <small class="text-muted d-block">{{ $proyecto->responsable }}</small>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
            <div class="col-sm-3">
                <h6>EJECUCION</h6>
            <!-- Contenido de la tercera columna -->
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 1)
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="mr-3">
                        <h5 class="card-title mb-1">{{ $proyecto->proyectos }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                        <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                        </div>
                        <div class="ml-auto text-right">
                            <small class="text-muted d-block">
                            <span class="font-medium rounded-lg m-2 p-1" style=" color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                            </span>
                            </small>
                            <!-- <small><a href="#">Editar</a></small> -->
                            <small><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></small>
                            <small class="text-muted d-block">{{ $proyecto->responsable }}</small>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
            <div class="col-sm-3">
                <h6>CIERRE</h6>
            <!-- Contenido de la cuarta columna -->
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 2)
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="mr-3">
                        <h5 class="card-title mb-1">{{ $proyecto->proyectos }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                        <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                        </div>
                        <div class="ml-auto text-right">
                            <small class="text-muted d-block">
                            <span class="font-medium rounded-lg m-2 p-1" style=" color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                            </span>
                            </small>
                            <!-- <small><a href="#">Editar</a></small> -->
                            <small><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></small>
                            <small class="text-muted d-block">{{ $proyecto->responsable }}</small>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .card-body {
            font-size: 14px;
        }
        .card {
            padding: 1px !important; 
        }
        .card {
            overflow: auto;
        }

    </style>


@stop

@section('js')
    <script>
        $(document).on("click", "#editarProyectoModal", function () {
           var proyectoId = $(this).data("id");

            //Realiza una petición AJAX al servidor para obtener los datos del proyecto.
           $.ajax({
                url: "/proyectos/" + proyectoId + "/edit",
               type: "GET",
               dataType: "json",
             success: function (data) {
                   // Carga los datos del proyecto en los campos del formulario del modal.
                  $("#nombre").val(data.nombre);
                    $("#descripcion").val(data.descripcion);
                    $("#costoProyecto").val(data.costoProyecto);
                },
                error: function () {
                    alert("No se pudo cargar el proyecto.");
                 },
            });
        }); 

    </script>
@stop