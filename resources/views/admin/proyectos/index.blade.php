@extends('adminlte::page')

@section('title', 'Obras')

@section('content_header')
    
    <div class="clearfix">
        <div class="button-group">
            <!-- <h1 class="float-left">Proyectos</h1> -->
            <form method="POST" action="{{ route('proyectos.store') }}">
                @csrf
                <button type="submit" class="btn btn-primary float-left" style="background-color: purple; color: white;">Nuevo</button>
            </form>

            <h6 class="float-right">$ {{ $totalCostoPD }} <span>({{ $contadorPD }} Obras)</span></h6>
        </div>

    </div>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-nowrap overflow-auto" style="height: 75vh;">
            <div class="col-sm-4">
                <h6>Anderson Lopez Chaverra</h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->responsable_user_id == 1)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $proyecto->cod_inva }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h6>
                            <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
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
            <div class="col-sm-4">
                <h6>Carlos Fernando Cabal</h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->responsable_user_id == 2)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $proyecto->cod_inva }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h6>
                            <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
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
            <div class="col-sm-4">
                <h6>Carol Alejandra Trejo</h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->responsable_user_id == 3)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $proyecto->cod_inva }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h6>
                            <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
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
            <div class="col-sm-4">
                <h6>Daniel Jose Castañeda</h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->responsable_user_id == 4)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $proyecto->cod_inva }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h6>
                            <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
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
            <div class="col-sm-4">
                <h6>Evelin Estupiñan Zuñiga</h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->responsable_user_id == 5)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $proyecto->cod_inva }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h6>
                            <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
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
            <div class="col-sm-4">
                <h6>Luis Fredy Jaimes</h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->responsable_user_id == 6)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $proyecto->cod_inva }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h6>
                            <p class="card-text">${{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
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
            
            
            
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
    @endif


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
   
@stop

@section('js')
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 1000);

    </script>
@stop